<?php

namespace App\Controllers;

session_start();

class MenuController
{
    private $frontController;

    public function __construct()
    {
        $this->viewController = new ViewController();
    }

    public function mainCourse()
    {
        $this->viewController->pratos();
    }

    public function drinks()
    {
        $this->viewController->bebidas();
    }
}