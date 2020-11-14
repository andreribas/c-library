<?php

use AndreRibas\Clibrary\Controller\MainController;
use AndreRibas\Clibrary\Router;

Router::notFound([MainController::class, 'notFound']);
Router::get('/', [MainController::class, 'index']);
Router::get('/about', [MainController::class, 'about']);
//Router::post('/header', [MainController::class, 'createHeader']);
