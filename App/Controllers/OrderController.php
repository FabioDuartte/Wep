<?php

namespace App\Controllers;

session_start();

class OrderController
{
    
    public function customerOrders()
    {
        ViewController::bill();
    }

    public function viewOrders()
    {
        ViewController::orders();
    }
}