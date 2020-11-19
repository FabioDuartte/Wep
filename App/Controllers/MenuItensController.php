<?php

namespace App\Controllers;

session_start();

class MenuItensController
{
    private $frontController;

    public function __construct()
    {
        $this->viewController = new ViewController();
    }

    public function manageProducts()
    {
        $this->viewController->registerItems();
    }
    
}