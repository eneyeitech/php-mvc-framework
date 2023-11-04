<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Models\User;
use MVC\Helpers\JSONFileHandler;
use MVC\Helpers\UserFactory;

class UserController extends Controller {
    public function index(){
        $array = JSONFileHandler::getContentAsArray("user.json");
        
        $users = UserFactory::createUsers($array);
        $this->render('user/index', ['users'=>$users]);
    }

    
}