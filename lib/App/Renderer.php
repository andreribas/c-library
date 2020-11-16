<?php

namespace AndreRibas\Clibrary\App;

class Renderer
{
    private string $layout_path;
    private array $blocks = [];

    public function renderResponse(Response $response): void
    {
        $params = $response->getParams();
        $this->renderTemplate($response->getTemplatePath(), $params);
        !empty($this->layout_path) && $this->renderTemplate($this->layout_path);
    }

    public function renderTemplate(string $templatePath, array $params = []): void
    {
        if (!empty($params)) {
            extract($params);
        }
        include(PROJECT_ROOT . '/templates/' . $templatePath);
    }

    public function extends_layout(string $layout_path)
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

    public function block_render(string $block_name)
    {
        echo $this->blocks[$block_name] ?? '';
    }

    public function reset()
    {
        $this->layout_path = '';
        $this->blocks = [];
    }
}