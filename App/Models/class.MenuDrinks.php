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

    static public function selectAllMenuItems()
    {
        $menuDAO = new MenuDAO();
        $menuItems = $menuDAO->selectForTypeMenuItemDrinks();
        $items = array();
            foreach ($menuItems as $menuItem) {
                $menuItem += $menuDAO->selectAllMenuItems($menuItem['Produto_idProduto']);
                $items[] = $menuItem;
            }
        return $items;
    }

    public function updateRegisterSupplierDrink()
    {
        $menuDAO = new MenuDAO();
        return $menuDAO->updateRegisterSupplierDrink($this);
    }

    public function removeItemDrink($idProduct)
    {
        $menuDAO = new MenuDAO();
        return $menuDAO->removeItemDrink($idProduct);
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
