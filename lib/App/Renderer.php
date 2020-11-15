<?php

namespace AndreRibas\Clibrary\App;

class Renderer
{
    public static function renderResponse(Response $response): void
    {
        $params = $response->getParams();
        extract($params);
        include(PROJECT_ROOT . '/templates/' . $response->getTemplatePath());
    }
}