<?php

namespace App\Models;

class Order
{
    

    private $orderID;
    private $totalOrderAmount;
    private $orderStatus;
    private $orderBill;
    private $orderItems;
    private $noteAboutOrderItems;

    public function __construct($orderID, $orderBill, $noteAboutOrderItems)
    {
        $this->orderID = $orderID;
        $this->orderingCustomer = $orderBill;
        $this->noteAboutOrderItems = $noteAboutOrderItems;
        $this->$totalOrderAmount = 0;
        $this->orderItems = array();
        $this->orderStatus = true; // Coloquei um valor booleano para representar se está aberto ou fechado
    }

    public function addFoodToOrder()
    {
        $newFood = new MenuFoods();
        $orderItems[] = $newFood;
    }

    public function addDrinkToOrder()
    {
        $newDrink = new MenuDrinks();
        $orderItems[] = $newDrink;
    }

    public function getOrderID()
    {
        return $this->orderID;
    }

    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
    }

    public function getTotalOrderAmount()
    {
        if (!$this->orderItems) {
            return $this->totalOrderAmount;
        } else {
            foreach ($this->orderItems as $menuItems) {
                $this->totalOrderAmount += (float)$menuItems->getMenuItemPrice();
            }
            return $this->totalOrderAmount;
        }
    }

    public function setTotalOrderAmount($totalOrderAmount)
    {
        $this->totalOrderAmount = $totalOrderAmount;
    }

    public function getOrderBill()
    {
        return $this->orderBill;
    }

    public function setOrderBill($orderBill)
    {
        $this->orderBill = $orderBill;
    }

    public function isOrderStatus()
    {
        return $this->orderStatus;
    }

    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }

    public function getOrderItems()
    {
        return $this->orderItems;
    }

    public function setOrderItems($orderItems)
    {
        $this->orderItems = $orderItems;
    }

    public function getNoteAboutOrderItems()
    {
        return $this->noteAboutOrderItems;
    }

    public function setNoteAboutOrderItems($noteAboutOrderItems)
    {
        $this->noteAboutOrderItems = $noteAboutOrderItems;
    }
    
}
