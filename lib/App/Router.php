<?php

namespace AndreRibas\Clibrary\App;

class Router
{
    protected static $routes;
    protected static $not_found_action;
    protected static $error_action;

    public static function getRouteFromRequest(Request $request)
    {
        foreach (self::$routes[$request->getHttpMethod()] as $route_pattern => $route_action) {
            $matches = [];
            $match = preg_match("@^$route_pattern$@", $request->getUri(), $matches);

            if ($match) {
                array_shift($matches);
                return [$route_action, $matches];
            }
        }

        return [self::$not_found_action, []];
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

    public static function error(callable $error_action)
    {
        self::$error_action = $error_action;
    }

    public static function getErrorAction()
    {
        return self::$error_action;
    }
}