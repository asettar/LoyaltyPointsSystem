<?php

use app\Controllers\AuthController;
use app\Core\Application;
use app\Core\Request;
use app\Core\Router;

require_once __DIR__ . '/../vendor/autoload.php';

app\Core\show($_GET);
app\Core\show($_SERVER['REQUEST_URI']);

function initializeRoutes(Router $router) {
    // controllers objects:
    $AuthController = new AuthController();

    // routes
    $router->get('/login', [$AuthController, 'loginForm']);
    $router->post('/login', [$AuthController, 'login']);
    $router->get('/register', [$AuthController, 'registerForm']);
    $router->post('/register', [$AuthController, 'register']);
}

$request = new Request();
$router = new Router($request);
initializeRoutes($router);

$app = new Application($router);
$app->run();
