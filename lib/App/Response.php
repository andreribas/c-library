<?php

namespace AndreRibas\Clibrary\App;

class Response
{
    private string $template_path;
    private array $params;

    public function __construct(string $template_path, array $params = [])
    {
        $this->template_path = $template_path;
        $this->params = $params;
    }

    public function getTemplatePath(): string
    {
        return $this->template_path;
    }

    public function getParams(): array
    {
        return $this->params;
    }
}