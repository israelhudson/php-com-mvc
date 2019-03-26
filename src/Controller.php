<?php

namespace SON;

class Controller{

    protected function render(array $data = [], string $view = null){

        extract($data);
        require __DIR__ . '/../template/' . $view . '.tpl.php';

    }

}