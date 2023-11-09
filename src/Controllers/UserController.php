<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Helpers\Config;
use MVC\Models\User;
use MVC\Helpers\JSONFileHandler;
use MVC\Helpers\UserFactory;


class UserController extends Controller {
    public function index(){
        $array = JSONFileHandler::getContentAsArray("user.json");
        $array_from_yaml = Config::getYaml('user');
        $users = UserFactory::createUsers($array_from_yaml);
        $this->siteDetails['vPage'] = 'people';
        $this->siteDetails['title'] = 'Users';
        $this->siteDetails['users'] = $users;
        
        $this->render('pages/defaultConceptTest/user/index', $this->siteDetails);
    }

    
}