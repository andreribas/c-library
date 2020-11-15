<?php

namespace Tests\Repository;

use AndreRibas\Clibrary\Model\Functionn;
use AndreRibas\Clibrary\Model\FunctionnCreator;
use AndreRibas\Clibrary\Model\HeaderCreator;
use AndreRibas\Clibrary\Repository\FunctionnRepository;
use Tests\TestCase;

class FunctionnRepositoryTest extends TestCase
{
    public function testFunctionnRepository()
    {
        $header = HeaderCreator::create('stdio.h', 'Standard Input/Output header');
        $functionn = FunctionnCreator::create('printf', 'Prints formatted data', $header->id);

        $functionn_from_get_by_id = FunctionnRepository::getById($functionn->id);
        [$functionn_from_get_all] = FunctionnRepository::getAll();
        [$functionn_from_get_by_header_id] = FunctionnRepository::getByHeaderId($header->id);
        [$functionn_from_get_by_title] = FunctionnRepository::getByTitle($functionn->title);

        $this->assertSameFunctionn($functionn, $functionn_from_get_by_id);
        $this->assertSameFunctionn($functionn, $functionn_from_get_all);
        $this->assertSameFunctionn($functionn, $functionn_from_get_by_header_id);
        $this->assertSameFunctionn($functionn, $functionn_from_get_by_title);
    }

    public function assertSameFunctionn(Functionn $functionn, Functionn $functionn_from_db): void
    {
        $this->assertEquals($functionn->id, $functionn_from_db->id);
        $this->assertEquals($functionn->title, $functionn_from_db->title);
        $this->assertEquals($functionn->description, $functionn_from_db->description);
        $this->assertEquals($functionn->header_id, $functionn_from_db->header_id);
    }
}