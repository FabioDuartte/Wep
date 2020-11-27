<?php

namespace App\Controllers;

use App\Models\MenuFoods;
use App\Models\MenuDrinks;
use Utils\DataProcessing;

session_start();

class UpdateProductMenuController extends DataProcessing
{
    public function updateProduct()
    {
        if ($_POST) {
            $_SESSION['error'] = '';
            $this->updateProductValidate();
        } else {
            ViewController::updateProduct();
        }
    }

    private function updateProductValidate()
    {
        $currentProductName = $this->cleanInput($_POST['product-oldName']);
        $newProductName = $this->cleanInput($_POST['product-newName']);
        $newProductPrice = $this->formatDataMoney($this->cleanInput($_POST['product-price']));
        $newProductImg = $this->cleanInput($_POST['product-src']);

        if (!$currentProductName) {
            $_SESSION['error'] = "Você precisa escolher qual produto será alterado";
            $this->updateProductFail();
        }

        if ($_POST['product-type'] === "mainCourseUpdate") {
            $newIngredients = $this->cleanInput($_POST['food-ingredients']);
            
            $objMenu = new MenuFoods("", "", "", "",);

            $this->setObjToUpdate($objMenu, $currentProductName, $newProductName, $newProductPrice, $newProductImg);
            
            if ($newIngredients) {
                
                $objMenu->setIngredients($newIngredients);
                echo $objMenu->getIngredients();
                $objMenu->updateRegisterIngredientsFood();
            }

        } else {
            $newProductSupplier = $this->cleanInput($_POST['drink-supplier']);
            $objMenu = new MenuDrinks("", "", "", "",);

            $this->setObjToUpdate($objMenu, $currentProductName, $newProductName, $newProductPrice, $newProductImg);

            if ($newProductSupplier) {
                $objMenu->setSupplier($newProductSupplier);
                if (!$objMenu->updateRegisterSupplierDrink()) {
                    $_SESSION['error'] = "Problema na atualização do fornecedor tente novamente";
                    $this->updateProductFail();
                }
            }
        }

        $_SESSION['success'] = "Produto alterado com sucesso";
        header("Location: /Wep/home/alterar-produto");

    }


    private function updateProductFail()
    {
        $_POST = array();
        header("Location: /Wep/home/alterar-produto");
        exit;
    }

    private function setObjToUpdate($objMenu, $currentProductName, $newProductName, $newProductPrice, $newProductImg)
    {
        $item = $objMenu->selectItemByName($currentProductName);
        if (!$item) {
            $_SESSION['error'] = "Nome escolhido não se encontra em um produto do menu verifique os pratos para ter certeza do nome escolhido";
            $this->updateProductFail();
        } else {
            $objMenu->setMenuItemName($item['nomeProduto']);
            $objMenu->setMenuItemPrice($item['precoProduto']);
            $objMenu->setMenuItemImg($item['imgProduto']);
            $objMenu->setMenuItemID($item['idProduto']);

            if ($newProductName) {
                $objMenu->setMenuItemName($newProductName);
            }
            
            if ($newProductPrice) {
                if (!is_numeric($newProductPrice) || !$this->validateFloat($newProductPrice) || $newProductPrice < 0) {
                    $_SESSION['error'] = "Preço inserido é invalido";
                    $this->updateProductFail();
                }
                $objMenu->setMenuItemPrice($newProductPrice);
            }
            
            if ($newProductImg) {
                $objMenu->setMenuItemImg($newProductImg);
            }

            if (!$objMenu->updateProduct()) {
                $_SESSION['error'] = "Produto não foi atualizado com sucesso tente outra vez ou verifique se ocorreu tudo bem";
                $this->updateProductFail();
            }

        }
    }
}