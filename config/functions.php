<?php

use AndreRibas\Clibrary\App\Service;

function template_extend(string $block_name) {
    Service::get('renderer')->template_extend($block_name);
}

function template_include(string $block_name, array $params = []) {
    Service::get('renderer')->template_include($block_name, $params);
}

function block_start(string $block_name) {
    Service::get('renderer')->block_start($block_name);
}

function block_end() {
    Service::get('renderer')->block_end();
}

function block_set(string $block_name, string $value) {
    Service::get('renderer')->block_set($block_name, $value);
}

function block_include(string $block_name) {
    Service::get('renderer')->block_include($block_name);
}

function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}
