<?php

namespace App\Models;

abstract class SystemUsers
{
    protected $userId;
    protected $userName;
    protected $userEmail;
    protected $userPassword;

    protected function __construct($userName, $userEmail, $userPassword)
    {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userPassword = $userPassword;
    }

    public function getUserId()
    {
        return $this->getUserId;
    }

    public function setUserId($userId)
    {
        $this->UserId = $userId;
    }

    public function getUserName()
    {
        return $this->userName;
    }

    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    public function getUserEmail()
    {
        return $this->userEmail;
    }

    public function setUserEmail($userEmail)
    {
        $this->userEmail = $userEmail;
    }

    public function getUserPassword()
    {
        return $this->userPassword;
    }

    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
    }
    
}
