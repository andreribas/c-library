<?php

namespace AndreRibas\Clibrary;

class Router
{
    private static $routes;
    private static $not_found_action;

    public static function run()
    {
        $request_uri = $_SERVER['REQUEST_URI'];
        $request_method = $_SERVER['REQUEST_METHOD'];
        $callable = self::$routes[$request_method][$request_uri] ?? self::$not_found_action;
        $callable();
    }

    public static function get(string $route_uri, callable $route_action)
    {
        self::$routes['GET'][$route_uri] = $route_action;
    }

    public static function post(string $route_uri, callable $route_action)
    {
        self::$routes['POST'][$route_uri] = $route_action;
    }

    public static function notFound(callable $not_found_action)
    {
        self::$not_found_action = $not_found_action;
    }
}