<?php

namespace App\Models;

use App\Models\SystemUsers;

class Customer extends SystemUsers
{
    private $customerBonus = 0;
    private $customerCard = array();
    
    public function __construct($userName, $userEmail, $userCpfOrIdEmployee, $userPassword, $userPhoneNumber = '')
    {
        parent::__construct($userName, $userEmail, $userCpfOrIdEmployee, $userPassword, $userPhoneNumber);
    }

    public function setNewCustomerCard($cardNumber, $cardBrand, $cardExpiry, $cardCvv)
    {
        $newCustomerCard = new Card($cardNumber, $cardBrand, $cardExpiry, $cardCvv);
        $this->customerCard[] = $newCustomerCard;
    }
    
    public function getCustomerCard()
    {
        return $this->customerCard;
    }

    public function setCustomerCard($customerCard)
    {
        $this->customerCard = $customerCard;
    }

    public function getCustomerBonus()
    {
        return $this->customerBonus;
    }
    
    public function setCustomerBonus($customerBonus)
    {
        $this->customerBonus = $customerBonus;
    }

}