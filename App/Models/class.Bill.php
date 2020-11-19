<?php

namespace App\Models;

class Bill
{
    // Fazer algo que some todos os pedidos de um mesmo cliente que estão abertos
    private $customerOwnerBill;
    private $orderBill = array();
    private $installments;

    public function __construct($customerOwnerBill, $orderBill, $installments)
    {
        $this->orderBill = $orderBill;
        $this->customerOwnerBill = $customerOwnerBill;
        $this->installments = 1;
    }

    public function setCustomerBonusPercentage()
    {
        
    }

    public function getOrderBill()
    {
        return $this->orderBill;
    }

    public function setOrderBill($orderBill)
    {
        $this->orderBill[] = $orderBill;
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