<?php

namespace AndreRibas\Clibrary\Controller;

use AndreRibas\Clibrary\Repository\HeaderRepository;

class MainController extends Controller
{
    public static function index()
    {
        $headers = HeaderRepository::getAll();
        self::renderTemplate('index.php', [
            'title' => 'Headers',
            'headers' => $headers,
        ]);
    }

    public static function about()
    {
        self::renderTemplate('about.php', [
            'title' => 'About us',
        ]);
    }

    public static function notFound()
    {
        self::renderTemplate('404.php', []);
    }
}