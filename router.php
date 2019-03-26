<?php

$router = new SON\Router;

$router['/'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'index'
    ];

$router['/registro'] = [
    'class' => App\Controllers\UsersController::class,
    'action' => 'create'
];

return $router;