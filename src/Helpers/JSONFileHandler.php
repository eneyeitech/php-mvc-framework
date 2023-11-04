<?php

namespace MVC\Helpers;

class JSONFileHandler
{
    static protected $directory = __DIR__ . '/../data/';

    static private function getContents($file)
    {
        $file_path = static::$directory . $file;

        if (file_exists($file_path)) {
            $json = file_get_contents($file_path);
            return  json_decode($json, true);
        }

        return false;
    }

    static public function getContentAsArray($file){
        $file = isset($file) && !empty($file) ? $file : "blank.json";
        $contents = static::getContents($file);
        return is_array($contents) ? $contents : [];
    }
}
