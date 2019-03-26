<?php

require __DIR__ . '/vendor/autoload.php';
$router = require __DIR__ . '/router.php';

$controller = new App\Controllers\UsersController();
echo $controller->handler();