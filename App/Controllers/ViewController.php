<?php

namespace App\Controllers;

class ViewController
{
    public function index()
    {
        require './App/Templates/View/frontpage.php';
    }

    public function home()
    {
        require './App/Templates/View/home.php';
    }
    
    public function login()
    {
        require './App/Templates/View/login.php';
    }

    public function pratos()
    {
        require './App/Templates/View/mainCourse.php';
    }

    public function bebidas()
    {
        require './App/Templates/View/drinks.php';
    }

    public function cadastro()
    {
        require './App/Templates/View/register.php';
    }

    public function editarCadastro()
    {
        require './App/Templates/View/updateRegistration.php';
    }

    public function bill()
    {
        require './App/Templates/View/bill.php';
    }
    
    public function soon()
    {
        require './App/Templates/View/comingSoon.php';
    }

    public function orders()
    {
        require './App/Templates/View/orders.php';
    }

    public function recovery()
    {
        require './App/Templates/View/recovery.php';
    }

    public function registerItems()
    {
        require './App/Templates/View/registerProducts.php';
    }

}
