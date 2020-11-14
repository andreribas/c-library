<?php

namespace AndreRibas\Clibrary\Controller;

abstract class Controller
{
    public static function renderTemplate(string $template_name, array $params): void
    {
        extract($params);
        include(PROJECT_ROOT . '/templates/' . $template_name);
    }
}