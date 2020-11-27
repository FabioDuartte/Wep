<?php

namespace App\Controllers;

use Utils\DataProcessing;
use App\Models\MenuFoods;
use App\Models\MenuDrinks;

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
        $menuItemImg = $this->cleanInput($_POST['product-src']);
        $menuItemPrice = $this->formatDataMoney($this->cleanInput($_POST['product-price']));
        
        if (!$menuItemName || !$menuItemPrice || !$menuItemImg) {
            $_SESSION['error'] = "Preencha todos os campos disponíveis para cadastrar um produto no cardápio";
            $this->addMenuItemsFail();
        }

        if (!$this->validateName($menuItemName)) {
            $_SESSION['error'] = "Nome inválido! Tente um nome que esteja entre: [a-zA-Z-' ]";
            $this->addMenuItemsFail();
        }


        if (!is_numeric($menuItemPrice) || !$this->validateFloat($menuItemPrice) || $menuItemPrice < 0) {
            $_SESSION['error'] = "Preço inserido é invalido";
            $this->addMenuItemsFail();
        }

        if ($_POST['product-type'] === "mainCourse") {
            $menuItemIngredients = $this->cleanInput($_POST['food-ingredients']);
            if (!$menuItemIngredients) {
                $_SESSION['error'] = "Preencha todos os campos disponíveis para cadastrar um produto no cardápio";
                $this->addMenuItemsFail();
            }
            $objMenu = new MenuFoods($menuItemName, $menuItemPrice, $menuItemImg, $menuItemIngredients);
            
        } else {
            $menuItemSuppliers = $this->cleanInput($_POST['drink-supplier']);
            if (!$menuItemSuppliers) {
                $_SESSION['error'] = "Preencha todos os campos disponíveis para cadastrar um produto no cardápio";
                $this->addMenuItemsFail();
            }
            $objMenu = new MenuDrinks($menuItemName, $menuItemPrice, $menuItemImg, $menuItemSuppliers);
        }

        if ($objMenu->selectItemByName($objMenu->getMenuItemName())) {
            $_SESSION['error'] = "Já existe um produto cadastrado com esse nome";
            $this->addMenuItemsFail();
        }

        if (!$objMenu->addMenuItemToDB()) {
            $_SESSION['error'] = "Produto não foi cadastrado corretamente, exclua-o do banco para não ocorrer grandes problemas";
            $this->addMenuItemsFail();
        }
        
        $_SESSION['success'] = "Produto cadastrado com sucesso";
        header("Location: /Wep/home/cadastrar-produtos");

    }

    private function addMenuItemsFail()
    {
        $_POST = array();
        header("Location: /Wep/home/cadastrar-produtos");
        exit;
    }


}
