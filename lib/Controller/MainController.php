<?php

namespace AndreRibas\Clibrary\Controller;

use AndreRibas\Clibrary\App\HttpCode;
use AndreRibas\Clibrary\App\Request;
use AndreRibas\Clibrary\App\Response;
use AndreRibas\Clibrary\Repository\HeaderRepository;

class MainController
{
    public static function index(Request $request)
    {
        return new Response('index.php', [
            'title' => 'C Library',
        ]);
    }

    public static function about(Request $request)
    {
        return new Response('about.php', [
            'title' => 'About us',
        ]);
    }

    public static function notFound(Request $request)
    {
        return new Response('404.php', http_code: HttpCode::NOT_FOUND);
    }

    public static function error(Request $request, \Throwable $error)
    {
        return new Response(
            'error.php',
            [
                'error' => $error,
            ],
            HttpCode::ERROR
        );
    }
}