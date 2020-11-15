<?php

namespace AndreRibas\Clibrary\App;

class App
{
    public function run()
    {
        $request = Request::fromSuperGlobals([
            'SERVER' => $_SERVER,
            'POST' => $_POST,
            'GET' => $_GET,
        ]);
        [$route_action, $route_params] = Router::getRouteFromRequest($request);
        $response = $route_action(...$route_params);
        Renderer::renderResponse($response);
    }
}
