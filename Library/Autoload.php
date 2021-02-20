<?php

namespace Library;

/**
 * Carregamento automático de Classes
 *
 * @category Wep
 * @package  Library
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
     * @param string $nameSpace da classe a se carregar
     *
     * @return retorna uma exceção caso o arquivo não seja encontrado, carrega o arquivo caso seja.
     *
    **/
    private function load($nameSpace) 
    {
        $nameSpaceInArray = explode('\\', $nameSpace);
        $className = array_pop($nameSpaceInArray);
        $nameSpace = implode(DS, $nameSpaceInArray);
        $classPath = DIR_ROOT . DS . $nameSpace . DS . 'class.' . $className . '.php';
        if (!file_exists($classPath)) {
            $classPath = DIR_ROOT . DS . $nameSpace . DS . $className . '.php';
            if (!file_exists($classPath)) {
                throw new Exception("File not found:" . $classPath, 1);
            } else {
                require_once $classPath;
            }
        } else {
            require_once $classPath;
        }
    }
}
