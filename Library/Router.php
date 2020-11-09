<?php

namespace Library;

class Router
{
    private $routes;

    function __construct()
    {
        $this->initRoutes();
        $this->runRoute($this->getURL());
    }

    private function initRoutes()
    {
        $this->routes['/'] = array('controller' => 'IndexController', 'action' => 'index');
        $this->routes['/lista'] = array('controller' => 'IndexController', 'action' => 'lista');
    }

    private function runRoute($url)
    {
        if (array_key_exists($url, $this->routes)) {
            $instanceClass = "\\App\\Controllers\\" . $this->routes[$url]['controller'];
            $controller = new $instanceClass;
            $action = $this->routes[$url]['action'];
            $controller->$action();
        }
    }

    private function getURL()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}