<?php

namespace App\Models;

class Bill
{

    // private $customerOwnerBill;
    private $orderBill;
    private $installments;

    public function __construct(/* $customerOwnerBill, */ $orderBill, $installments)
    {
        $this->orderBill = $orderBill;
        // $this->customerBill = $customerBill;
        $this->installments = 1;
    }

    public function setCustomerBonusPercentage()
    {
        
    }

/*     public function getCustomerBill()
    {
        return $this->customerBill;
    }

    public function setCustomerBill($customerBill)
    {
        $this->customerBill = $customerBill;
    } */

    public function getOrderBill()
    {
        return $this->orderBill;
    }

    public function setOrderBill($orderBill)
    {
        $this->orderBill = $orderBill;
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