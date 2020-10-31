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
        $this->routes['/lista-de-arquivo'] = array('controller' => 'IndexController', 'action' => 'lista');
    }

    private function runRoute($url)
    {
        if (array_key_exists($url, $this->routes)) {
            $includeClass = "\\App\\Controllers\\" . $this->routes[$url]['controller'];
            $controller = new $includeClass;
            $action = $this->routes[$url]['action'];
            $controller->$action();
        }
    }

    private function getURL()
    {
        return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    }
}

/* class Router
{

    public function __construct()
    {
        $this->runRoute();
    }

    public function runRoute()
    {
        if (isset($_GET['url'])) {
            $url = $_GET['url'];
        }
        if (!empty($url)) {
            $url = explode('/', $url);
            $controller = $url[0] . 'Controller';
            $url = array_shift($url);
        }

        if (isset($url[0]) && !empty($url[0])) {
            $method = $url[0];
            $url = array_shift($url);
        } else {
            $method = 'index';
        }

        if (count($url) > 0) {
            $params = $url;
        } else {
            $controller = 'IndexController';
            $method = 'index';
        }

        $path = 'App/Controllers/' . $controller . 'php';

        if (!(file_exists($path) && method_exists($controller, $method))) {
            $controller = 'IndexController';
            $method = 'index';
        }
    }
} */
