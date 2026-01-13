<?php

use app\Core\Application;

require_once __DIR__ . '/../vendor/autoload.php';


// var_dump($_GET);
// show($_GET);
// var_dump($_SERVER['REQUEST_URI']);

// show(splitUrl());
// loadController();


var_dump($_SERVER['REQUEST_URI']);

$app = new Application();
$app->run();
// $app->router->get('/', function);
// $app->router->get();