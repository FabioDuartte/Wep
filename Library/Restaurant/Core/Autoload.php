<?php

namespace Library\Restaurant\Core;

/**
 * Carregamento automático de Classes
 *
 * @category Restaurant
 * @package  Core
 *
**/
class Autoload
{
    public function __construct()
    {
        spl_autoload_register(array($this, 'load'));
    }

    /**
     * Carrega outros arquivos
     *
     * @param string $className a classe a se carregar
     *
     * @return  retorna uma exceção caso o arquivo não seja encontrado
     *
    **/
    private function load($className)
    {
        $nameSpace = str_replace('\\', DS, $className);
        $classPath = ROOT . DS . $nameSpace . '.php';
        if (!file_exists($classPath)) {
            throw new Exception("File not found:" . $classPath, 1);
        } else {
            require_once $classPath;
        }
    }
}
