<?php

namespace AndreRibas\Clibrary\Controller;

use AndreRibas\Clibrary\App\Response;
use AndreRibas\Clibrary\Repository\FunctionnRepository;
use AndreRibas\Clibrary\Repository\HeaderRepository;

class FunctionnController
{
    public static function show($functionn_id)
    {
        return new Response('functionn.php', [
            'headers' => HeaderRepository::getAllWithFunctionns(),
            'functionn' => FunctionnRepository::getById((int)$functionn_id),
        ]);
    }
}