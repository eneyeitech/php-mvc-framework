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
        //$this->siteDetails['page'] = 'home';
        $this->siteDetails['title'] = 'Home';
        $this->render('pages/faculty/index', $this->siteDetails);
    }

    public function history()
    {
        $this->siteDetails['page'] = 'about';
        $this->siteDetails['sub_page'] = 'history';
        $this->siteDetails['title'] = 'History';
        $this->render('pages/faculty/history', $this->siteDetails);
    }

    public function deans()
    {
        $deans_array = Config::getYaml('deans');
        //print_r($deans_array);
        $this->siteDetails['deans'] = $deans_array;
        $this->siteDetails['page'] = 'org';
        $this->siteDetails['sub_page'] = 'deans';
        $this->siteDetails['title'] = 'Present &amp; Past Deans';
        $this->render('pages/faculty/deans', $this->siteDetails);
    }

    public function staff()
    {
        $this->siteDetails['page'] = 'staff';
        //$this->siteDetails['sub_page'] = '';
        $this->siteDetails['title'] = 'Staff';
        $this->render('pages/faculty/staff', $this->siteDetails);
    }

    public function contact()
    {
        $this->siteDetails['page'] = 'contact';
        //$this->siteDetails['sub_page'] = '';
        $this->siteDetails['title'] = 'Contact Us';
        $this->render('pages/faculty/contact', $this->siteDetails);
    }
}
