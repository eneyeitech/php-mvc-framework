<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Helpers\Config;

class HomeController extends Controller
{
    //static protected $config_path = __DIR__ . '/../../config';
    //protected $siteDetails;

    function __construct()
    {
        //Config::setDirectory(static::$config_path);
        //$this->siteDetails = Config::get('site');
        
    }

    public function index()
    {
        $this->siteDetails['vPage'] = 'people';
        $this->siteDetails['title'] = 'Academic Staff';
        $this->render('home/index', $this->siteDetails);
    }
}
