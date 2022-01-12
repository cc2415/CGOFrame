<?php
namespace cgo;

class AutoLoad
{
    public static function load($className)
    {
        $fileName = str_replace('\\','/', DIR.'\\..\\'. $className).'.php';
        if(is_file($fileName)){
            require $fileName;
        }
    }
}