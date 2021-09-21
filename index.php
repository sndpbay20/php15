<?php

require_once __DIR__.'/../vendor/autoload.php';

use app\Router;
use app\controllers\ProductController;
$router = new Router();
 
$router->get('/', [ProductController::class, 'index']);
$router->get('/products', [ProductController::class, 'index']);
$router->get('/products/create', [ProductController::class, 'index']);
$router->post('/products/create', [ProductController::class, 'index']);
$router->get('/products/update', [ProductController::class, 'index']);
$router->post('/products/update', [ProductController::class, 'index']);
$router->post('/products/delete', [ProductController::class, 'index']);

$router ->resolve();