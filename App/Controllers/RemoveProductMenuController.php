<?php

namespace App\Controllers;

use App\Models\MenuFoods;
use App\Models\MenuDrinks;
use Utils\DataProcessing;

class RemoveProductMenuController extends DataProcessing
{
    public function removeProduct()
    {
        if ($_POST) {
            $this->removeProductValidate();
        } else {
            ViewController::removeProduct();
        }
    }

    private function removeProductValidate()
    {
        $nameToRemove = $this->cleanInput($_POST['product-name']);
        
        if (!$nameToRemove) {
            echo "Nome inválido!";
            $this->removeProductFail();
        }

        if ($_POST['product-type'] === "mainCourseDelete") {
            $objMenu = new MenuFoods("", "", "", "");
            $itemToRemove = $objMenu->selectItemByName($nameToRemove);
            if (!$itemToRemove) {
                echo "Não há nenhum item cadastrado com esse nome";
                $this->removeProductFail();
            } else {
                if ($objMenu->removeItemFood($itemToRemove['idProduto'])) {
                    $objMenu->removeProduct();
                } else {
                    echo "O produto ao qual se refere não é um Prato, pode ser uma Bebidas ou não está contido no cardápio";
                    $this->removeProductFail();
                }
            }
            
        } else {
            $objMenu = new MenuDrinks("", "", "", "");
            $itemToRemove = $objMenu->selectItemByName($nameToRemove);
            if (!$itemToRemove) {
                echo "Não há nenhum item cadastrado com esse nome";
                $this->removeProductFail();
            } else {
                if ($objMenu->removeItemDrink($itemToRemove['idProduto'])) {
                    $objMenu->removeProduct();
                } else {
                    echo "O produto ao qual se refere não é uma Bebida, pode ser um Prato ou não está contido no cardápio";
                    $this->removeProductFail();
                }
            }
        }
        

        echo "Tudo ocorreu bem";
        header("Location: /Wep/home/remover-produto");
            
    }

    private function removeProductFail()
    {
        $_POST = array();
        header("Location: /Wep/home/remover-produto");
        exit;
    }

}