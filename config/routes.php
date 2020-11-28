<?php

use AndreRibas\Clibrary\Controller\FunctionnController;
use AndreRibas\Clibrary\Controller\HeaderController;
use AndreRibas\Clibrary\Controller\MainController;
use AndreRibas\Clibrary\App\Router;

Router::notFound([MainController::class, 'notFound']);
Router::error([MainController::class, 'error']);
Router::get('/', [MainController::class, 'index']);
Router::get('/about', [MainController::class, 'about']);

Router::get('/header/([0-9]+)', [HeaderController::class, 'show']);
Router::get('/function/([0-9]+)', [FunctionnController::class, 'show']);


//Router::post('/header', [MainController::class, 'createHeader']);
