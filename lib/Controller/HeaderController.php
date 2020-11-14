<?php

namespace AndreRibas\Clibrary\Controller;

use AndreRibas\Clibrary\Repository\FunctionnRepository;
use AndreRibas\Clibrary\Repository\HeaderRepository;

class HeaderController extends Controller
{
    public static function show($header_id)
    {
        $header = HeaderRepository::getById($header_id);
        $functionns = FunctionnRepository::getByHeaderId((int)$header_id);
        self::renderTemplate('header.php', [
            'header' => $header,
            'functionns' => $functionns,
        ]);
    }
}