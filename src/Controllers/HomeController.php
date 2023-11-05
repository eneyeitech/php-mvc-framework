<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Helpers\Config;

class HomeController extends Controller
{

    public function index()
    {
        $this->siteDetails['vPage'] = 'index';
        $this->siteDetails['title'] = 'Academic Staff';
        $this->render('home/index', $this->siteDetails);
    }
}
