<?php

namespace App\Models;

use App\Models\Database\MenuDAO;

class MenuDrinks extends MenuItems
{
    private $supplier;

    public function __construct($menuItemName, $menuItemPrice, $menuItemImg, $supplier)
    {
        parent::__construct($menuItemName, $menuItemPrice, $menuItemImg);
        $this->supplier = $supplier;
    }

    public function addMenuItemToDB()
    {
        $menuDAO = new MenuDAO();
        $idProduct = $menuDAO->addItemToDatabaseMenu($this);
        return $menuDAO->addDrinkToMenu($this, $idProduct);
    }

    public function getSupplier()
    {
        return $this->supplier;
    }

    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    }

}
