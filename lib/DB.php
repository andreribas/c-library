<?php

namespace AndreRibas\Clibrary;

class DB
{
    private static $db;

    public static function getDB()
    {
        if (is_null(self::$db)) {
            self::$db = new \PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME, DB_USER, DB_PASS);
        }

        return self::$db;
    }
}