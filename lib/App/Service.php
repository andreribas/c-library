<?php

namespace AndreRibas\Clibrary\App;

class Service
{
    private static array $services = [];

    public static function set(string $service_name, callable $service_callable)
    {
        self::$services[$service_name] = $service_callable;
    }

    public static function get(string $service_name)
    {
        $service_callable = self::$services[$service_name];
        return $service_callable();
    }
}