<?php

namespace MVC\Controllers;

use MVC\Controller;
use MVC\Helpers\Config;

class FacultyController extends Controller
{

    function __construct()
    {
        parent::__construct('/Views/base_faculty.phtml');   
    }

    public function index()
    {
        $this->siteDetails['vPage'] = 'index';
        $this->siteDetails['title'] = 'Home';
        $this->render('pages/faculty/index', $this->siteDetails);
    }

    public function history()
    {
        $this->siteDetails['vPage'] = 'history';
        $this->siteDetails['title'] = 'History';
        $this->render('pages/faculty/history', $this->siteDetails);
    }
}
