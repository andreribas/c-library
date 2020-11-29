<?php

use AndreRibas\Clibrary\App\Renderer;
use AndreRibas\Clibrary\App\Service;

function getNewPdoConnection(): \PDO
{
    $db_host = getenv('DB_HOST') ?? throw new \Exception('Env DB_HOST not set');
    $db_port = getenv('DB_PORT') ?? throw new \Exception('Env DB_PORT not set');
    $db_name = getenv('DB_NAME') ?? throw new \Exception('Env DB_NAME not set');
    $db_user = getenv('DB_USER') ?? throw new \Exception('Env DB_USER not set');
    $db_pass = getenv('DB_PASS');

    return new \PDO("mysql:host={$db_host};port={$db_port};dbname={$db_name};charset=utf8", $db_user, $db_pass);
}

function init_services()
{
    $render = new Renderer();
    $db = getNewPdoConnection();

    Service::set('renderer', fn() => $render);
    Service::set('db', fn() => $db);
}

init_services();