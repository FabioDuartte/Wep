<?php

namespace App\Models;

abstract class SystemUser
{
    protected $userName;
    protected $userEmail;
    protected $userPassword;
    protected $userPhoneNumber;

    protected function __construct($userName, $userEmail, $userPassword, $userPhoneNumber)
    {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userPassword = $userPassword;
        $this->userPhoneNumber = $userPhoneNumber;
    }

    protected function getName()
    {
        return $this->userName;
    }

    protected function setName($userName)
    {
        $this->userName = $userName;
    }

    protected function getUserEmail()
    {
        return $this->userEmail;
    }

    protected function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    protected function getUserPassword()
    {
        return $this->userPassword;
    }

    protected function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
    }

    protected function getUserPhoneNumber()
    {
        return $this->userPhoneNumber;
    }

    protected function setUserPhoneNumber($userPhoneNumber)
    {
        $this->userPhoneNumber = $userPhoneNumber;
    }
    
}
