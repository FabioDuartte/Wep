<?php

namespace App\Models;

class Client extends SystemUser
{
    private $clientBonus;
    private $clientCard;
    
    public function __construct($userName, $userEmail, $userPassword, $clientCard,
    $cardNumber, $cardBrand, $cardExpiry, $userPhoneNumber = '')
    {
        parent::__construct($userName, $userEmail, $userPassword, $userPhoneNumber);
        $this->clientCpf = $clientCpf;
        $this->clientCard = new Card($cardNumber, $cardBrand, $cardExpiry);
        $this->clientBonus = 0;
    }
    
    public function getClientCard()
    {
        return $this->clientCard;
    }

    public function setClientCard($clientCard)
    {
        $this->clientCard = $clientCard;
    }

    public function getClientBonus()
    {
        return $this->clientBonus;
    }
    
    public function setClientBonus($clientBonus)
    {
        $this->clientBonus = $clientBonus;
    }

}
