<?php

namespace MVC\Controllers;

use MVC\Controller;

class HomeController extends Controller {
    public function index(){ 
        $this->render('home/index');
    }

    
}