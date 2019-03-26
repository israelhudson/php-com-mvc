<?php

require __DIR__ . '/vendor/autoload.php';
$router = require __DIR__ . '/router.php';

$object = $router->handler();

$controller = new $object['class'];
$action = $object['action'];
echo $controller->$action();