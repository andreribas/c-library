<?php

namespace AndreRibas\Clibrary\Controller;

use AndreRibas\Clibrary\App\Response;
use AndreRibas\Clibrary\Repository\FunctionnRepository;
use AndreRibas\Clibrary\Repository\HeaderRepository;

class HeaderController
{
    public static function show($header_id)
    {
        return new Response('header.php', [
            'header' => HeaderRepository::getById($header_id),
            'functionns' => FunctionnRepository::getByHeaderId($header_id),
        ]);
    }
}