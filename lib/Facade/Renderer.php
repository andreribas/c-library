<?php

namespace AndreRibas\Clibrary\Facade;

use AndreRibas\Clibrary\App\Renderer as AppRenderer;
use AndreRibas\Clibrary\App\Service;

class Renderer
{
    public static function get(): AppRenderer
    {
        return Service::get('renderer');
    }
}