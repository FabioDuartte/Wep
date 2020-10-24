<?php

namespace Core\Lib;

class Autoload
{
    public function __construct() 
    {
        spl_autoload_register(array($this, 'load'));
    }

    private function load($className)
    {
        $nameSpace = str_replace('\\', DS, $className);
        $classPath = __DIR__ . DS . ".." . DS . $nameSpace . '.php';
        if (!file_exists($classPath)) {
            throw new Exception("File not found:" . $classPath, 1);
        } else {
            require_once $classPath;
        }
    }
}
