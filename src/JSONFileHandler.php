<?php

namespace MVC;

class JSONFileHandler
{
    static protected $directory = __DIR__ . '/../data/';

    static public function getContents($file)
    {
        $file_path = static::$directory . $file;

        if (file_exists($file_path)) {
            $json = file_get_contents($file_path);
            return  json_decode($json, true);
        }

        return false;
    }
}
