<?php

namespace App\Models;

abstract class SystemUsers
{
    protected $userName;
    protected $userEmail;
    protected $userPassword;
    protected $userPhoneNumber;
    protected $userCpfOrIdEmployee; // Talvez eu separe novamente

    protected function __construct($userName, $userEmail, $userCpfOrIdEmployee, $userPassword, $userPhoneNumber)
    {
        $this->userName = $userName;
        $this->userEmail = $userEmail;
        $this->userCpfOrIdEmployee = $userCpfOrIdEmployee;
        $this->userPassword = $userPassword;
        $this->userPhoneNumber = $userPhoneNumber;
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

    public function getUserCpfOrIdEmployee()
    {
        return $this->userCpfOrIdEmployee;
    }

    public function setUserCpfOrIdEmployee($userCpfOrIdEmployee)
    {
        $this->userCpfOrIdEmployee = $userCpfOrIdEmployee;
    }

    public function getUserPassword()
    {
        return $this->userPassword;
    }

    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;
    }

    public function getUserPhoneNumber()
    {
        return $this->userPhoneNumber;
    }

    public function setUserPhoneNumber($userPhoneNumber)
    {
        $this->userPhoneNumber = $userPhoneNumber;
    }
    
}
