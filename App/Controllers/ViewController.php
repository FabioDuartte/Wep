<?php

namespace App\Controllers;

class ViewController
{
    static public function index()
    {
        require './App/Templates/View/frontpage.php';
    }

    static public function home()
    {
        require './App/Templates/View/home.php';
    }
    
    static public function login()
    {
        require './App/Templates/View/login.php';
    }

    static public function pratos()
    {
        require './App/Templates/View/mainCourse.php';
    }

    static public function bebidas()
    {
        require './App/Templates/View/drinks.php';
    }

    static public function cadastro()
    {
        require './App/Templates/View/register.php';
    }

    static public function editarCadastro()
    {
        require './App/Templates/View/updateRegistration.php';
    }

    static public function bill()
    {
        require './App/Templates/View/bill.php';
    }
    
    static public function soon()
    {
        require './App/Templates/View/comingSoon.php';
    }

    static public function orders()
    {
        require './App/Templates/View/orders.php';
    }

    static public function recovery()
    {
        require './App/Templates/View/recovery.php';
    }

    static public function registerItems()
    {
        require './App/Templates/View/registerProducts.php';
    }

    static public function updateProduct()
    {
        require './App/Templates/View/updateProduct.php';
    }

    static public function removeProduct()
    {
        require './App/Templates/View/removeProduct.php';
    }

    static public function trackOrder()
    {
        require './App/Templates/View/trackOrder.php';
    }

    static public function payment()
    {
        require './App/Templates/View/payment.php';
    }


}
