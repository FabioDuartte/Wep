<?php

namespace App\Controllers;

session_start();

class IndexController
{
    private $frontController;

    public function __construct()
    {
        $this->viewController = new ViewController();
    }

    public function index()
    {
        $_SESSION = array();
        $this->viewController->index();
    }

    public function home()
    {
        $this->viewController->home();
    }

    public function soon()
    {
        $this->viewController->soon();
    }
}
