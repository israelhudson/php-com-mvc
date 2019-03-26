<?php

$router = new SON\Router;

$router['/'] = [
    'controller' => App\Controllers\UsersController::class,
    'action' => 'index'
    ];

return $router;