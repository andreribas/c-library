<?php

namespace AndreRibas\Clibrary\App;

class RouterForTests extends Router
{
    public static function reset()
    {
        parent::$not_found_action = null;
        parent::$routes = [];
    }
}