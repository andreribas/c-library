<?php

namespace AndreRibas\Clibrary\Model;

use AndreRibas\Clibrary\Repository\FunctionnRepository;

class FunctionnCreator
{

    public static function create(string $functionn_title, string $functionn_description, $header_id): Functionn
    {
        $functionn = new Functionn();
        $functionn->title = $functionn_title;
        $functionn->description = $functionn_description;
        $functionn->header_id = $header_id;
        $functionn->id = FunctionnRepository::create($functionn);
        return $functionn;
    }
}