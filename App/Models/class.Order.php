<?php

namespace App\Models;

class Order
{
    // Fazer algo que some todos os pedidos de um mesmo cliente que estão abertos

    // private $orderID;
    private $totalOrderAmount = 0;
    private $orderStatus;
    private $orderingCustomer;
    private $orderItems;
    private $noteAboutOrderItems; // Descrição do pedido

    public function __construct(/* $orderID ,*/ $orderingCustomer, $orderItems = array())
    {
        // $this->orderID = $orderID;
        $this->orderingCustomer = $orderingCustomer;
        $this->orderItems = $orderItems;
        $this->orderStatus = true; // Coloquei um valor booleano para representar se está aberto ou fechado
    }

/*     public function getOrderID()
    {
        return $this->orderID;
    }

    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
    } */

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

    public function getOrderingCustomer()
    {
        return $this->orderingCustomer;
    }

    public function setOrderingCustomer($orderingCustomer)
    {
        $this->orderingCustomer = $orderingCustomer;
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
