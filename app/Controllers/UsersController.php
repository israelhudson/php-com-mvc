<?php

namespace App\Controllers;

use SON\Controller;

class UsersController extends Controller{

    public function index(){
        $this->render(['nome' => $_GET['nome']], 'users/index');

    }

    public function create(){
        return 'Pagina de cadastro de usuarios.';
    }

}