<?php

namespace AndreRibas\Clibrary\App;

class Renderer
{
    private string $layout_path;
    private array $blocks = [];
    private Response $response;

    public function renderResponse(Response $response): void
    {
        $this->response = $response;
        http_response_code($response->getHttpCode());
        $this->template_include($response->getTemplatePath());
        !empty($this->layout_path) && $this->template_include($this->layout_path);
    }

    public function template_include(string $templatePath, array $params = []): void
    {
        $params = array_merge($this->response->getParams(), $params);
        if (!empty($params)) {
            extract($params);
        }
        try {
            include(PROJECT_ROOT . '/templates/' . $templatePath);
        } catch (\Throwable $t) {
            @ob_end_clean();
            throw $t;
        }
    }

    public function template_extend(string $layout_path)
    {
        $this->layout_path = $layout_path;
    }

    public function block_start(string $block_name)
    {
        ob_start(fn ($buffer) => $this->block_set($block_name, $buffer));
    }

    public function block_end()
    {
        ob_end_clean();
    }

    public function block_set(string $block_name, string $value)
    {
        $this->blocks[$block_name] = $value;
    }

    public function block_include(string $block_name)
    {
        echo $this->blocks[$block_name] ?? '';
    }

    public function reset()
    {
        $this->layout_path = '';
        $this->blocks = [];
    }
}