<?php

namespace App\Models;

use App\Models\Database\OrderDAO;

class Order
{
    private $orderID;
    private $totalOrderAmount;
    private $orderStatus;
    private $idBill;
    private $orderItems;

    public function __construct($idBill, $orderItems, $totalOrderAmount)
    {
        $this->idBill = $idBill;
        $this->orderItems = $orderItems;
        $this->totalOrderAmount = $totalOrderAmount;
        $this->orderStatus = 1;
    }

    public function createOrder()
    {
        $orderDAO = new OrderDAO();
        return $orderDAO->createOrder($this);
    }

    public function createItemsOrder()
    {
        $orderDAO = new OrderDAO();
        return $orderDAO->createItemsOrder($this);
    }

    public function selectItemsOrder($idCustomer)
    {
        $orderDAO = new OrderDAO();
        return $orderDAO->selectItemsOrder($idCustomer);
    }

    public function getAllOrdersOpen()
    {
        $orderDAO = new OrderDAO();
        return $orderDAO->getAllOrdersOpen();
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
        return $this->totalOrderAmount;
    }

    public function setTotalOrderAmount($totalOrderAmount)
    {
        $this->totalOrderAmount = $totalOrderAmount;
    }

    public function getIdBill()
    {
        return $this->idBill;
    }

    public function setIdBill($idBill)
    {
        $this->idBill = $idBill;
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
    
}
