<?php

namespace App\Models;

use App\Models\Database\OrderDAO;

class Order
{
    private $orderID;
    private $idBill;
    private $orderItems;

    public function __construct($idBill, $orderItems)
    {
        $this->idBill = $idBill;
        $this->orderItems = $orderItems;
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

    public function changeStatus($idItem)
    {
        $orderDAO = new OrderDAO();
        return $orderDAO->changeStatus($idItem);
    }

    public function removeOrder($idPedido)
    {
        $orderDAO = new OrderDAO();
        return $orderDAO->removeOrder($idPedido);
    }

    public function removeItemOrder($idItemOrder)
    {
        $orderDAO = new OrderDAO();
        return $orderDAO->removeItemOrder($idItemOrder);
    }

    public function verifyOrderHaveItems($idOrder)
    {
        $orderDAO = new OrderDAO();
        return $orderDAO->verifyOrderHaveItems($idOrder);
    }

    public function removeItemByCustomerID($idCustomer)
    {
        $orderDAO = new OrderDAO();
        return $orderDAO->removeItemByCustomerID($idCustomer);
    }

    public function getOrderID()
    {
        return $this->orderID;
    }

    public function setOrderID($orderID)
    {
        $this->orderID = $orderID;
    }

    public function getIdBill()
    {
        return $this->idBill;
    }

    public function setIdBill($idBill)
    {
        $this->idBill = $idBill;
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
