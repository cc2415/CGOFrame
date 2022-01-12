<?php

namespace cgo\CgoFrame;

class Application
{
    /**
     * @var string
     */
    protected string $path;

    public function __construct($path)
    {
        $this->path = $path;
        //自动加载
//        require_once __DIR__ . '/AutoLoad.php';
//        spl_autoload_register(array('\\AutoLoad', 'load'));
    }


    public function run()
    {

    }
}