<?php

namespace Tests\Repository;

use AndreRibas\Clibrary\Model\Header;
use AndreRibas\Clibrary\Model\HeaderCreator;
use AndreRibas\Clibrary\Repository\HeaderRepository;
use Tests\TestCase;

class HeaderRepositoryTest extends TestCase
{
    public function testHeaderRepository()
    {
        $header = HeaderCreator::create('stdio.h', 'Standard Input/Output Library');

        $header_from_get_by_id = HeaderRepository::getById($header->id);
        [$header_from_get_all] = HeaderRepository::getAll();

        $this->assertSameHeader($header, $header_from_get_by_id);
        $this->assertSameHeader($header, $header_from_get_all);
    }

    public function testDelete()
    {
        $header = HeaderCreator::create('stdio.h', 'Standard Input/Output Library');

        $deleted = HeaderRepository::delete($header);
        $this->assertTrue($deleted);

        $this->expectExceptionMessage("Header id {$header->id} not found");
        HeaderRepository::getById($header->id);
    }

    public function testDeleteNonExistentHeader()
    {
        $header = new Header();
        $header->id = 1;

        $deleted = HeaderRepository::delete($header);
        $this->assertFalse($deleted);
    }

    public function testUpdate()
    {
        $header = HeaderCreator::create('stdio.h', 'Standard Input/Output Library');
        $header->title = 'math.h';
        $header->description = 'Standard Math Library';

        $updated = HeaderRepository::update($header);
        $this->assertTrue($updated);

        $header_from_get_by_id = HeaderRepository::getById($header->id);
        $this->assertSameHeader($header, $header_from_get_by_id);
    }

    public function testUpdateNonExistentHeader()
    {
        $header = new Header();
        $header->id = 1;

        $updated = HeaderRepository::update($header);
        $this->assertFalse($updated);
    }

    public function assertSameHeader(Header $header, Header $header_from_get_by_id): void
    {
        $this->assertEquals($header->id, $header_from_get_by_id->id);
        $this->assertEquals($header->title, $header_from_get_by_id->title);
        $this->assertEquals($header->description, $header_from_get_by_id->description);
    }
}