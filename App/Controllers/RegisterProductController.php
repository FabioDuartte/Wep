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
            // echo "Preencha todos os campos disponíveis para cadastrar um produto no cardápio";
            $this->addMenuItemsFail();
        }

        if (!$this->validateName($menuItemName)) {
            // echo "Nome inválido! Tente um nome que esteja entre: [a-zA-Z-' ]";
            $this->addMenuItemsFail();
        }


        if (!is_numeric($menuItemPrice) || !$this->validateFloat($menuItemPrice) || $menuItemPrice < 0) {
            // echo "Preço inserido é invalido";
            $this->addMenuItemsFail();
        }

        if ($_POST['product-type'] === "mainCourse") {
            $menuItemIngredients = $this->cleanInput($_POST['food-ingredients']);
            if (!$menuItemIngredients) {
                // echo "Preencha todos os campos disponíveis para cadastrar um produto no cardápio";
                $this->addMenuItemsFail();
            }
            $objMenu = new MenuFoods($menuItemName, $menuItemPrice, $menuItemImg, $menuItemIngredients);

        } else {
            $menuItemSuppliers = $this->cleanInput($_POST['drink-supplier']);
            if (!$menuItemSuppliers) {
                // echo "Preencha todos os campos disponíveis para cadastrar um produto no cardápio";
                $this->addMenuItemsFail();
            }
            $objMenu = new MenuDrinks($menuItemName, $menuItemPrice, $menuItemImg, $menuItemSuppliers);
        }

        if (!$objMenu->addMenuItemToDB()) {
            // echo "Produto não foi cadastrado corretamente, exclua-o do banco para não ocorrer grandes problemas";
            $this->addMenuItemsFail();
        }
        
        // echo "Produto cadastrado com sucesso";
        header("Location: /Wep/home/cadastrar-produtos");

    }

    private function addMenuItemsFail()
    {
        $_POST = array();
        header("Location: /Wep/home/cadastrar-produtos");
        exit;
    }


}
