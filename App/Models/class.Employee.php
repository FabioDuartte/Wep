<?php

namespace App\Models;

use App\Models\Database\LoginDAO;

class Employee extends SystemUsers
{
    private $position;
    private $IdEmployee;

    public function __construct($userName, $userEmail, $IdEmployee, $userPassword, $position)
    {
        parent::__construct($userName, $userEmail, $userPassword);
        $this->IdEmployee = $IdEmployee;
        $this->position = $position;
    }

    public function loginEmployee()
    {
        $loginDAO = new LoginDAO();
        return $loginDAO->checkLoginEmployee($this);
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position)
    {
        $this->position = $position;
    }

    public function getIdEmployee()
    {
        return $this->IdEmployee;
    }

    public function setIdEmployee($IdEmployee)
    {
        $this->IdEmployee = $IdEmployee;
    }

}
