<?php

namespace AndreRibas\Clibrary\Model;

use AndreRibas\Clibrary\Repository\HeaderRepository;

class HeaderCreator
{

    public static function create(string $header_title, string $header_description): Header
    {
        $header = new Header();
        $header->title = $header_title;
        $header->description = $header_description;
        $header->id = HeaderRepository::create($header);
        $header->functionns = [];
        return $header;
    }
}