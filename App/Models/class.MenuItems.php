<?php

namespace App\Models;

abstract class MenuItems
{
    //Antiga produto
    protected $menuItemName;
    protected $menuItemPrice;
    protected $menuItemID;

    protected function __construct($menuItemName, $menuItemPrice)
    {
        $this->menuItemName = $menuItemName;
        $this->menuItemPrice = $menuItemPrice;
    }

    public function getMenuItemName()
    {
        return $this->menuItemName;
    }
    
    public function setMenuItemName($menuItemName)
    {
        $this->menuItemName = $menuItemName;
    }

    public function getMenuItemPrice()
    {
        return $this->menuItemPrice;
    }

    public function setMenuItemPrice($menuItemPrice)
    {
        $this->menuItemPrice = $menuItemPrice;
    }

    public function getMenuItemID()
    {
        return $this->menuItemID;
    }

    public function setMenuItemID($menuItemID)
    {
        $this->menuItemID = $menuItemID;
    }

}
