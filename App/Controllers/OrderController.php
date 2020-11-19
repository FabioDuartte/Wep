<?php

namespace App\Controllers;

session_start();

class OrderController
{
    private $frontController;

    public function __construct()
    {
        $this->viewController = new ViewController();
    }

    public function customerOrders()
    {
        $this->viewController->bill();
    }

    public function viewOrders()
    {
        $this->viewController->orders();
    }
}