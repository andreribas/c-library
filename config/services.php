<?php

use AndreRibas\Clibrary\App\Renderer;
use AndreRibas\Clibrary\App\Service;

function init_services()
{
    $render = new Renderer();
    $db = new \PDO('mysql:host=' . DB_HOST . ';port=' . DB_PORT . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

    Service::set('renderer', fn() => $render);
    Service::set('db', fn() => $db);
}

init_services();