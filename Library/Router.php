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
        $this->routes['/Wep/'] = array('controller' => 'IndexController', 'action' => 'index');
        $this->routes['/Wep/login'] = array('controller' => 'LoginController', 'action' => 'login');
        $this->routes['/Wep/login/nada-para-ver-aqui'] = array('controller' => 'IndexController', 'action' => 'soon');
        $this->routes['/Wep/cadastro'] = array('controller' => 'RegisterController', 'action' => 'register');
        $this->routes['/Wep/recuperar-senha'] = array('controller' => 'LoginController', 'action' => 'recovery');
        $this->routes['/Wep/home'] = array('controller' => 'IndexController', 'action' => 'home');
        $this->routes['/Wep/home/pratos'] = array('controller' => 'MenuController', 'action' => 'mainCourse');
        $this->routes['/Wep/home/bebidas'] = array('controller' => 'MenuController', 'action' => 'drinks');
        $this->routes['/Wep/home/cadastrar-produtos'] = array('controller' => 'RegisterProductController', 'action' => 'addMenuItems');
        $this->routes['/Wep/home/pedidos-feito'] = array('controller' => 'OrderController', 'action' => 'viewOrders');
        $this->routes['/Wep/home/editar-cadastro'] = array('controller' => 'UpdateRegisterController', 'action' => 'updateRegistration');
        $this->routes['/Wep/home/minha-conta'] = array('controller' => 'OrderController', 'action' => 'customerOrders');
        $this->routes['/Wep/home/alterar-produto'] = array('controller' => 'UpdateProductController', 'action' => 'updateProduct');
        $this->routes['/Wep/home/deletar-produto'] = array('controller' => 'DeleteProductController', 'action' => 'deleteProduct');
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