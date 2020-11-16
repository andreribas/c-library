<?php

use AndreRibas\Clibrary\App\Service;

function extends_layout(string $block_name) {
    Service::get('renderer')->extends_layout($block_name);
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

function block_render(string $block_name) {
    Service::get('renderer')->block_render($block_name);
}
