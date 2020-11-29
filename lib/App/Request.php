<?php

namespace AndreRibas\Clibrary\App;

class Request
{
    private string $url_path;
    private string $http_method;
    private array $params;

    public static function fromSuperGlobals(array $super_globals)
    {
        $obj = new self();
        $obj->url_path = parse_url($super_globals['SERVER']['REQUEST_URI'], PHP_URL_PATH) ?: 'MALFORMED_URL_PATH';
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
        return is_string($this->params[$param]) ? htmlentities($this->params[$param]) : $this->params[$param];
    }

    public function getRawParam(string $param)
    {
        return $this->params[$param];
    }

    public function getParams()
    {
        return $this->params;
    }

    public function getUrlPath(): string
    {
        return $this->url_path;
    }

    public function getHttpMethod(): string
    {
        return $this->http_method;
    }


}