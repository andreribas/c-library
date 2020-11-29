<?php

use AndreRibas\Clibrary\Controller\FunctionnController;
use AndreRibas\Clibrary\Controller\HeaderController;
use AndreRibas\Clibrary\Controller\MainController;
use AndreRibas\Clibrary\App\Router;

Router::notFound([MainController::class, 'notFound']);
Router::error([MainController::class, 'error']);
Router::get('/', [MainController::class, 'index']);
Router::get('/about', [MainController::class, 'about']);
Router::get('/search', [MainController::class, 'search']);

Router::get('/headers', [HeaderController::class, 'index']);
Router::get('/headers/create', [HeaderController::class, 'create']);
Router::post('/headers', [HeaderController::class, 'store']);
Router::get('/headers/([0-9]+)', [HeaderController::class, 'show']);
Router::get('/headers/([0-9]+)/edit', [HeaderController::class, 'edit']);
Router::put('/headers/([0-9]+)', [HeaderController::class, 'update']);
Router::delete('/headers/([0-9]+)', [HeaderController::class, 'destroy']);

Router::get('/functions', [FunctionnController::class, 'index']);
Router::get('/functions/create', [FunctionnController::class, 'create']);
Router::post('/functions', [FunctionnController::class, 'store']);
Router::get('/functions/([0-9]+)', [FunctionnController::class, 'show']);
Router::get('/functions/([0-9]+)/edit', [FunctionnController::class, 'edit']);
Router::put('/functions/([0-9]+)', [FunctionnController::class, 'update']);
Router::delete('/functions/([0-9]+)', [FunctionnController::class, 'destroy']);