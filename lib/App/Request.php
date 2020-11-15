<?php

namespace AndreRibas\Clibrary\App;

class Request
{
    private string $uri;
    private string $http_method;
    private array $params;

    public static function fromSuperGlobals(array $super_globals)
    {
        $obj = new self();
        $obj->uri = $super_globals['SERVER']['REQUEST_URI'];
        $obj->http_method = $super_globals['SERVER']['REQUEST_METHOD'];
        $obj->params = array_merge($super_globals['GET'], $super_globals['POST']);
        return $obj;
    }

    public function isSetParam(string $param)
    {
        return isset($this->params[$param]);
    }

    public function getParam(string $param)
    {
        return $this->params[$param];
    }

    public function getParams()
    {
        return $this->params;
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getHttpMethod(): string
    {
        return $this->http_method;
    }


}