<?php

namespace AndreRibas\Clibrary\Controller;

use AndreRibas\Clibrary\Repository\FunctionnRepository;

class FunctionnController extends Controller
{
    public static function show($functionn_id)
    {
        $functionn = FunctionnRepository::getById((int)$functionn_id);
        self::renderTemplate('functionn.php', [
            'functionn' => $functionn,
        ]);
    }
}