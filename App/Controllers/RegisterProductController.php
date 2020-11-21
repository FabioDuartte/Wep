<?php

namespace App\Controllers;

use Utils\DataProcessing;
use App\Models\MenuFoods;
use App\Models\MenuDrinks;
use App\Models\Database\MenuDAO;

session_start();

class RegisterProductController extends DataProcessing
{
    public function addMenuItems()
    {
        if ($_POST) {
            $this->registerProducts();
        } else {
            ViewController::registerItems();
        }
    }

    private function registerProducts()
    {
        $menuItemName = $this->cleanInput($_POST['product-name']);
        //$menuItemSrc = $this->cleanInput($_POST['product-src']);
        $menuItemPrice = $this->formatDataMoney($this->cleanInput($_POST['product-price']));
        
        if (!$menuItemName || !$menuItemPrice) {
            //echo "Preencha todos os campos disponíveis para cadastrar um produto no cardápio";
            echo  "<script>alert('Erro');</script>";
            $this->addMenuItemsFailed();
        }

        if (!$this->validateFloat($menuItemPrice)) {
            echo "Preço inserido é invalido";
            $this->addMenuItemsFailed();
        }

        if ($_POST['product-type'] === "mainCourse") {
            $menuItemIngredients = $this->cleanInput($_POST['food-ingredients']);
            if (!$menuItemIngredients) {
                // echo "Preencha todos os campos disponíveis para cadastrar um produto no cardápio";
                echo  "<script>alert('Erro');</script>";
                $this->addMenuItemsFailed();
            }
            $objMenu = new MenuFoods($menuItemName, $menuItemPrice, $menuItemIngredients);

        } else {
            $menuItemSuppliers = $this->cleanInput($_POST['drink-supplier']);
            if (!$menuItemSuppliers) {
               // echo "Preencha todos os campos disponíveis para cadastrar um produto no cardápio";
               echo  "<script>alert('Erro');</script>";
                $this->addMenuItemsFailed();
            }
            $objMenu = new MenuDrinks($menuItemName, $menuItemPrice, $menuItemSuppliers);
        }

        if (!$objMenu->addMenuItemToDB()) {
            $_POST = array();
            header("Location: /Wep/home/cadastrar-produtos");
            exit;
        }
        
        echo '<script src="/Wep/App/Templates/View/scripts/error.js"> </script>';
        header("Location: /Wep/home/cadastrar-produtos");

    }

    private function addMenuItemsFailed()
    {
        $_POST = array();
        header("Location: /Wep/home/cadastrar-produtos");
        exit;
    }
}
