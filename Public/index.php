<?php

use app\Core\Application;
use app\Core\Request;
use app\Core\Router;

require_once __DIR__ . '/../vendor/autoload.php';

app\Core\show($_GET);
app\Core\show($_SERVER['REQUEST_URI']);

$app = new Application(new Router(new Request()));

$app->run();