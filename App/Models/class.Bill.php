<?php

namespace App\Models;

use App\Models\Database\BillDAO;

class Bill
{
    // Fazer algo que some todos os pedidos de um mesmo cliente que estão abertos
    private $customerOwnerBill;
    private $billAmount;
    private $installments;

    public function __construct($customerOwnerBill, $billAmount = 0, $installments = 1)
    {
        $this->BillAmount = $billAmount;
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

    public function getBillAmount()
    {
        return $this->billAmount;
    }

    public function setBillAmount($billAmount)
    {
        $this->billAmount = $billAmount;
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