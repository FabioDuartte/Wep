<?php

namespace App\Models;

class MenuFoods extends MenuItems
{
    private $ingredients = array();

    public function __construct($menuItemName, $menuItemPrice, $menuItemID, $ingredients)
    {
        parent::__construct($menuItemName, $menuItemPrice, $menuItemID);
        $this->ingredients = $ingredients;
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
