<?php

namespace AndreRibas\Clibrary\App;

class App
{
    public function run()
    {
        $request = $this->buildRequest();
        try {
            [$route_action, $route_params] = Router::getRouteFromRequest($request);
            $this->renderAction($request, $route_action, $route_params);
        } catch (\Throwable $t) {
            $error_action = Router::getErrorAction();
            $this->renderAction($request, $error_action, [$t]);
        }
    }

    private function buildRequest(): Request
    {
        return $request = Request::fromSuperGlobals([
            'SERVER' => $_SERVER,
            'POST' => $_POST,
            'GET' => $_GET,
        ]);
    }

    private function renderAction(Request $request, callable $action, array $route_params): void
    {
        $response = $action($request, ...$route_params);
        Service::get('renderer')->renderResponse($response);
    }
}
