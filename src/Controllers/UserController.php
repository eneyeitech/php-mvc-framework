<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\User;
use MVC\Helpers\JSONFileHandler;

class UserController extends Controller {
    public function index(){
        $users = [
            new User('John Doe', 'john@example.com'),
            new User('Jane Doe', 'jane@example.com')
        ];

        $this->render('user/index', ['users'=>$users]);
    }

    
}