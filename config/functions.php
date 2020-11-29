<?php

use AndreRibas\Clibrary\Facade\Renderer;

function template_extend(string $block_name) {
    Renderer::get()->template_extend($block_name);
}

function template_include(string $block_name, array $params = []) {
    Renderer::get()->template_include($block_name, $params);
}

function block_start(string $block_name) {
    Renderer::get()->block_start($block_name);
}

function block_end() {
    Renderer::get()->block_end();
}

function block_set(string $block_name, string $value) {
    Renderer::get()->block_set($block_name, $value);
}

function block_include(string $block_name) {
    Renderer::get()->block_include($block_name);
}

function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}
