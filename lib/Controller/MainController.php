<?php

namespace AndreRibas\Clibrary\Controller;

use AndreRibas\Clibrary\App\Response;
use AndreRibas\Clibrary\Repository\HeaderRepository;

class MainController
{
    public static function index()
    {
        return new Response('index.php', [
            'title' => 'C Library',
            'headers' => HeaderRepository::getAllWithFunctionns(),
        ]);
    }

    public static function about()
    {
        return new Response('about.php', [
            'title' => 'About us',
        ]);
    }

    public static function notFound()
    {
        return new Response('404.php');
    }
}