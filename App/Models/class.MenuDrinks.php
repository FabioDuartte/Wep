<?php

namespace App\Models;

class MenuDrinks extends MenuItems
{
    private $supplier;

    public function __construct($menuItemName, $menuItemPrice, $menuItemID, $supplier)
    {
        parent::__construct($menuItemName, $menuItemPrice, $menuItemID);
        $this->supplier = $supplier;
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
