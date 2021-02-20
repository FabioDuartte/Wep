<?php

namespace App\Models;

use App\Models\Database\BillDAO;

class Bill
{
    // Fazer algo que some todos os pedidos de um mesmo cliente que estão abertos
    private $customerOwnerBill;
    private $billTotalAmount;
    private $installments;

    public function __construct($customerOwnerBill, $billTotalAmount = 0, $installments = 1)
    {
        $this->BillTotalAmount = $billTotalAmount;
        $this->customerOwnerBill = $customerOwnerBill;
        $this->installments = $installments;
    }

    public function createBill()
    {
        $billDAO = new BillDAO();
        return $billDAO->createBill($this);
    }

    public function checkBillExists()
    {
        $billDAO = new BillDAO();
        return $billDAO->checkBillExists($this);
    }

    public function getBillTotalAmountOnDB()
    {
        $billDAO = new BillDAO();
        return $billDAO->getBillTotalAmountOnDB($this);
    }

    public function getOrdersToPay()
    {
        $billDAO = new BillDAO();
        return $billDAO->getOrdersToPay($this);
    }

    public function getBillTotalAmount()
    {
        return $this->billTotalAmount;
    }

    public function setBillTotalAmount($billTotalAmount)
    {
        $this->billTotalAmount = $billTotalAmount;
    }

    public function getCustomerOwnerBill()
    {
        return $this->customerOwnerBill;
    }

    public function setCustomerOwnerBill($customerOwnerBill)
    {
        $this->customerOwnerBill = $customerOwnerBill;
    }

    public function getInstallments()
    {
        return $this->installments;
    }

    public function setInstallments($installments)
    {
        $this->installments = $installments;
    }

}