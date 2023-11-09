<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Helpers\Config;

class CreativeController extends Controller
{

    function __construct()
    {
        parent::__construct('/Views/base_creative.phtml');   
    }

    public function home()
    {
        $this->siteDetails['vPage'] = 'index';
        $this->siteDetails['title'] = 'Academic Staff';
        $this->render('pages/creative/home', $this->siteDetails);
    }
}
