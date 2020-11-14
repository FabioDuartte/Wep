<?php

namespace App\Models;

class Employee extends SystemUsers
{
    private $position;

    public function __construct($userName, $userEmail, $userCpfOrIdEmployee, $userPassword, $userPhoneNumber, $position = "Cozinheiro")
    {
        parent::__construct($userName, $userEmail, $userCpfOrIdEmployee, $userPassword, $userPhoneNumber);
        $this->position = $position;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

}
