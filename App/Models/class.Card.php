<?php

namespace App\Models;

use App\Models\Database\CardDAO;

class Card
{
    private $cardNumber;
    private $cardBrand;
    private $cardExpiry;
    private $cardCvv;

    public function __construct($cardNumber, $cardBrand, $cardExpiry, $cardCvv)
    {
        $this->cardNumber = $cardNumber;
        $this->cardBrand = $cardBrand;
        $this->cardExpiry = $cardExpiry;
        $this->cardCvv = $cardCvv;
    }

    public function insertIntoCard($idCliente)
    {
        $cardDAO = new CardDAO();
        return $cardDAO->insertIntoCard($this, $idCliente);
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

    public function getCardCvv()
    {
        return $this->cardCvv;
    }

    public function setCardCvv($cardCvv)
    {
        $this->cardCvv = $cardCvv;
    }
    
}
