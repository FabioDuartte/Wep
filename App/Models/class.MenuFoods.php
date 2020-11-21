<?php

namespace App\Models;

use App\Models\Database\MenuDAO;

class MenuFoods extends MenuItems
{
    private $ingredients;

    public function __construct($menuItemName, $menuItemPrice, $ingredients)
    {
        parent::__construct($menuItemName, $menuItemPrice);
        $this->ingredients = $ingredients;
    }

    public function addMenuItemToDB()
    {
        $menuDAO = new MenuDAO();
        $idProduct = $menuDAO->addItemToDatabaseMenu($this);
        return $menuDAO->addFoodToMenu($this, $idProduct);
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients()
    {
        $this->ingredients = $ingredients;
    }

}
