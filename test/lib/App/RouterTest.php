<?php

namespace Tests\App;

use AndreRibas\Clibrary\App\Request;
use AndreRibas\Clibrary\App\Router;
use Tests\TestCase;

class RouterTest extends TestCase
{
    public function testGetRoute()
    {
        Router::get('/', fn () => 'HOME');
        Router::get('/entity/([0-9]+)', fn () => 'HOME');
        Router::notFound(fn () => '404');

        $this->assertRouteResult('/', 'GET', 'HOME', []);
        $this->assertRouteResult('/entity/2', 'GET', 'HOME', [2]);
        $this->assertRouteResult('/batata', 'GET', '404', null);
    }

    public function createRequest(string $request_uri, string $request_method): Request
    {
        return Request::fromSuperGlobals([
            'SERVER' => [
                'REQUEST_URI' => $request_uri,
                'REQUEST_METHOD' => $request_method,
            ],
            'GET' => [
            ],
            'POST' => [
            ],
        ]);
    }

    public function assertRouteResult(string $request_uri, string $request_method, string $expected_action_result, $expected_params): void
    {
        $request = $this->createRequest($request_uri, $request_method);
        [$route_action, $route_params] = Router::getRouteFromRequest($request);
        $this->assertEquals($expected_action_result, $route_action());
        $this->assertEquals($expected_params, $route_params);
    }
}