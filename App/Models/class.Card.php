<?php

namespace App\Models;

class Card
{
    protected $cardNumber;
    protected $cardBrand;
    protected $cardExpiry;

    public function __construct($cardNumber, $cardBrand, $cardExpiry)
    {
        $this->cardNumber = $cardNumber;
        $this->cardBrand = $cardBrand;
        $this->cardExpiry = $cardExpiry;
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }

    public function getCardBrand()
    {
        return $this->cardBrand;
    }

    public function setCardBrand($cardBrand)
    {
        $this->cardBrand = $cardBrand;
    }

    public function getCardExpiry()
    {
        return $this->cardExpiry;
    }

    public function setCardExpiry($cardExpiry)
    {
        $this->cardExpiry = $cardExpiry;
    }
    
}