<?php

namespace AndreRibas\Clibrary\Controller;

class MainController
{
    public static function index()
    {
        echo "<h1>Home page</h1>";
    }

    public static function about()
    {
        echo "<h1>About us</h1>";
    }

    public static function notFound()
    {
        echo "<h1>404: Page not found</h1>";
    }
}