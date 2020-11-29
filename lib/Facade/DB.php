<?php

namespace AndreRibas\Clibrary\Facade;

use AndreRibas\Clibrary\App\Service;

class DB
{
    public static function get(): \PDO
    {
        return Service::get('db');
    }
}