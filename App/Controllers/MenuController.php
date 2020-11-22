<?php

namespace App\Controllers;

use App\Models\MenuFoods;
use App\Models\MenuDrinks;

session_start();

class MenuController
{

    public function mainCourse()
    {
        $_SESSION['lista-item'] = array();
        $_SESSION['lista-item'] = MenuFoods::selectAllMenuItems();
        ViewController::pratos();
    }

    public function drinks()
    {
        $_SESSION['lista-item'] = array();
        $_SESSION['lista-item'] = MenuDrinks::selectAllMenuItems();
        
        ViewController::bebidas();
    }
}
