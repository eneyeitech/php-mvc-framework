<?php

require __DIR__ . '/vendor/autoload.php';

$uri = $_SERVER['REQUEST_URI'];

require __DIR__ .  '/src/routes.php';

$router->dispatch($uri);