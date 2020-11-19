<?php

namespace App\Models;

class MenuFoods extends MenuItems
{
    private $ingredients;

    public function __construct($menuItemName, $menuItemPrice, $ingredients)
    {
        parent::__construct($menuItemName, $menuItemPrice);
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
