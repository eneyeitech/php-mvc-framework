<?php

use MVC\Controllers\HomeController;
use MVC\Router;
use MVC\Controllers\UserController;

$router = new Router();

$router->addRoute('/user', UserController::class, 'index');
$router->addRoute('/', HomeController::class, 'index');