<?php

use MVC\Controllers\CreativeController;
use MVC\Controllers\HomeController;
use MVC\Router;
use MVC\Controllers\UserController;

$router = new Router();

$router->addRoute('/', HomeController::class, 'index');
$router->addRoute('/user', UserController::class, 'index');
$router->addRoute('/creative', CreativeController::class, 'home');