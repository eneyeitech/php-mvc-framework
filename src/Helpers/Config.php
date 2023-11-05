<?php 

namespace MVC\Helpers;

use Symfony\Component\Yaml\Yaml;

/**
 * Config 
 */
class Config
{
    static public $directory;

    static public $config = [];

    /**
     * set directory
     *
     * @param string $path
     * @return void
     */
    static public function setDirectory($path)
    {
        self::$directory = $path;
    }

    /**
    *  get config 
    *
    *  @param string $config
    *  @return string
    */
    static public function get($config)
    {
        $config = strtolower($config);

        self::$config[$config] = require self::$directory . '/' . $config . '.php';

        return self::$config[$config];
    }

    /**
    *  get config 
    *
    *  @param string $config
    *  @return string
    */
    static public function getYaml($config)
    {
        $config = strtolower($config);

        self::$config[$config] = self::$directory . '/' . $config . '.yml';
        $filePath = self::$config[$config];
        
        $content = Yaml::parseFile($filePath);

        return $content;
    }
}
