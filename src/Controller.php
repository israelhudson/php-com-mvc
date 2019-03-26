<?php

namespace SON;

class Controller{

    protected function render(array $data = [], string $view = null){

        if (!$view){
            $view = $this->controllerName() . '/' .debug_backtrace()[1]['function'];
        }

        extract($data);
        require __DIR__ . '/../template/' . $view . '.tpl.php';

    }

    private function controllerName(){
        $class = get_class($this); // App\Controllers\UsersController   retorna o nome da variavel que está herdando de controller
        $class = explode('\\', $class); // ['App'], ['Controllers'], ['UsersController']
        $class = array_pop($class); // UsersController
        $class - preg_replace('/Controller$/', '', $class); // Users
        return strtolower($class); // users
    }

















}