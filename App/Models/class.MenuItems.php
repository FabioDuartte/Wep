<?php

namespace App\Models;

use App\Models\Database\MenuDAO;

abstract class MenuItems
{
    //Antiga produto
    protected $menuItemName;
    protected $menuItemPrice;
    protected $menuItemID;
    protected $menuItemImg;

    protected function __construct($menuItemName, $menuItemPrice, $menuItemImg)
    {
        $this->menuItemName = $menuItemName;
        $this->menuItemPrice = $menuItemPrice;
        $this->menuItemImg = $menuItemImg;
    }

    abstract protected function addMenuItemToDB();
    abstract static protected function selectAllMenuItems();

    public function selectItemByName($name)
    {
        $menuDAO = new MenuDAO();
        return $menuDAO->selectItemByName($name);
    }

    public function updateProduct()
    {
        $menuDAO = new MenuDAO();
        return $menuDAO->updateProduct($this);
    }

    public function removeProduct()
    {
        $menuDAO = new MenuDAO();
        return $menuDAO->removeProduct($this);
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

    public function getMenuItemImg()
    {
        return $this->menuItemImg;
    }

    public function setMenuItemImg($menuItemImg)
    {
        $this->menuItemImg = $menuItemImg;
    }

}
