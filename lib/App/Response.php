<?php

namespace AndreRibas\Clibrary\App;

class Response
{
    private string $template_path;
    private array $params;
    private int $http_code;

    public function __construct(string $template_path, array $params = [], int $http_code = HttpCode::OK)
    {
        $this->template_path = $template_path;
        $this->params = $params;
        $this->http_code = $http_code;
    }

    public function getTemplatePath(): string
    {
        return $this->template_path;
    }

    public function getParams(): array
    {
        return $this->params;
    }

    public function getHttpCode(): int
    {
        return $this->http_code;
    }
}