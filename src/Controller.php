<?php

namespace MVC;

use MVC\Helpers\Config;

class Controller
{

    static protected $directory = __DIR__ . '/Views/';
    //static protected $base_view = __DIR__ . '/Views/base.phtml';
    //static protected $base_view_2 = __DIR__ . '/Views/base_2.phtml';
    protected $view;
    protected $partial;
    protected $data;
    protected $base_view = __DIR__ . '/Views/base.phtml';

    static protected $config_path = __DIR__ . '/../config';
    protected $siteDetails;

    function __construct($base = null)
    {
        if (isset($base) || !empty($base)){
            $this->base_view = __DIR__ . $base;
        }
        Config::setDirectory(static::$config_path);
        $this->siteDetails = Config::get('site');
        
    }


    protected function render($view, $data = [])
    {

        $this->view = static::$directory . "$view.phtml";
        $this->data = $data;
        
        extract($data);

        //include static::$base_view;
        include $this->base_view;
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
        
        $this->data = array_merge($this->data, $data);
        
        extract($this->data);

        include $this->partial;
    }

    public function content()
    {
        extract($this->data);
        include $this->view;
    }
}
