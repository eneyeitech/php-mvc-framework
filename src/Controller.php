<?php

namespace MVC;

use MVC\Helpers\Config;

class Controller
{

    static protected $directory = __DIR__ . '/Views/';
    static protected $base_view = __DIR__ . '/Views/base.phtml';
    protected $view;
    protected $partial;
    protected $data;

    static protected $config_path = __DIR__ . '/../config';
    protected $siteDetails;

    function __construct()
    {
        Config::setDirectory(static::$config_path);
        $this->siteDetails = Config::get('site');
        
    }


    protected function render($view, $data = [])
    {

        $this->view = static::$directory . "$view.phtml";
        $this->data = $data;
        
        extract($data);

        include static::$base_view;
    }

    public function notfound($data)
    {
        extract($data);

        include static::$directory . "404.phtml";
    }

    public function include($partial, $data = array())
    {
        $partial = static::$directory . $partial;
        $this->partial = is_null($partial) || !file_exists($partial) ? static::$directory . '_blank.phtml' : $partial;

        extract($data);

        include $this->partial;
    }

    public function content()
    {
        extract($this->data);
        include $this->view;
    }
}
