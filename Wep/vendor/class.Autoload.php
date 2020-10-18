<?php

class Autoload
{
    public function __construct() {
        spl_autoload_extensions('.php');
        spl_autoload_register(array($this, 'load'));
    }

    private function load($className)
    {
        $extension = spl_autoload_extensions();
        $nameSpace = str_replace('\\', DS, $className);
        $classPath = ROOT . DS . $nameSpace . $extension;
        if (!file_exists($classPath)) {
            throw new Exception("File not found: {$classPath} ", 1);
        } else {
            require_once "{$classPath}";
        }
    }
}
