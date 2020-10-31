<?php

namespace App\Models;

class Employee extends SystemUser
{
    private $employeeIdentifierNumber;
    private $manager;

    public function __construct($userName, $userEmail, $userPassword, $userPhoneNumber, $employeeIdentifierNumber)
    {
        parent::__construct($userName, $userEmail, $userPassword, $userPhoneNumber);
        $this->employeeIdentifierNumber = $employeeIdentifierNumber;
        $this->manager = false;
    }

    public function getEmployeeIndeterminateNumber()
    {
        return $this->employeeIdentifierNumber;
    }

    public function setEmployeeIdentifierNumber($employeeIdentifierNumberNumber)
    {
        $this->employeeIdentifierNumberNumber = $employeeIdentifierNumberNumber;
    }

    public function isManager()
    {
        return $this->manager;
    }

    public function setManager($manager)
    {
        $this->manager = $manager;
    }

}