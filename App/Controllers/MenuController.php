<?php

namespace App\Controllers;

use App\Models\MenuFoods;
use App\Models\MenuDrinks;
use Utils\DataProcessing;

session_start();

class MenuController extends DataProcessing
{
    public function mainCourse()
    {
        if (isset($_POST['search']) && !empty($_POST['search'])) {
            $nameToSearch = parent::cleanInput($_POST['search']);
            $_SESSION['lista-item'] = array();
            $_SESSION['lista-item'] = MenuFoods::selectItemLikeName($nameToSearch);
        } else {
            $_SESSION['lista-item'] = array();
            $_SESSION['lista-item'] = MenuFoods::selectAllMenuItems();
        }
        ViewController::pratos();
    }

    public function drinks()
    {
        $_SESSION['lista-item'] = array();
        $_SESSION['lista-item'] = MenuDrinks::selectAllMenuItems();
        ViewController::bebidas();
        
    }

}
