<?php

namespace AndreRibas\Clibrary\Controller;

class MainController
{
    public static function index()
    {
        $headers = Headers::getAll();

        self::renderTemplate('index.php', [
            'title' => 'Hello World',
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

    public static function renderTemplate(string $template_name, array $params): void
    {
        extract($params);
        include(PROJECT_ROOT . '/templates/' . $template_name);
    }
}