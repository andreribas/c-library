<?php

namespace AndreRibas\Clibrary\Controller;

use AndreRibas\Clibrary\App\Response;
use AndreRibas\Clibrary\Repository\FunctionnRepository;

class FunctionnController
{
    public static function show($functionn_id)
    {
        return new Response('functionn.php', [
            'functionn' => FunctionnRepository::getById((int)$functionn_id),
        ]);
    }
}