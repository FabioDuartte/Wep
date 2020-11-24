<?php

namespace App\Models;

use App\Models\Database\MenuDAO;

class MenuFoods extends MenuItems
{
    private $ingredients;

    public function __construct($menuItemName, $menuItemPrice, $menuItemImg, $ingredients)
    {
        parent::__construct($menuItemName, $menuItemPrice, $menuItemImg);
        $this->ingredients = $ingredients;
    }

    public function addMenuItemToDB()
    {
        $menuDAO = new MenuDAO();
        $idProduct = $menuDAO->addItemToDatabaseMenu($this);
        return $menuDAO->addFoodToMenu($this, $idProduct);
    }

    static public function selectAllMenuItems()
    {
        $menuDAO = new MenuDAO();
        $menuItems = $menuDAO->selectForTypeMenuItemFood();
            foreach ($menuItems as $menuItem) {
                $menuItem += $menuDAO->selectAllMenuItems($menuItem['Produto_idProduto']);
                $define[] = $menuItem;
            }
        return $define;
    }

    public function updateRegisterIngredientsFood()
    {
        $menuDAO = new MenuDAO();
        return $menuDAO->updateRegisterIngredientsFood($this);
    }

    public function removeItemFood($idProduct)
    {
        $menuDAO = new MenuDAO();
        return $menuDAO->removeItemFood($idProduct);
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

}
