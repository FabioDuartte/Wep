<?php

namespace App\Models\Database;

use App\Models\Employee;
use App\Models\Customer;

class LoginDAO
{
    public function checkLoginEmployee($objEmployee)
    {
        try {
            $conn = ConnectionDatabase::getConnection();
            $query = $conn->prepare("SELECT * FROM Funcionarios WHERE emailFuncionario = :email");
            $email = $objEmployee->getUserEmail();
            $query->bindParam("email", $email);
            $query->execute();
            $employees = $query->fetch();
            return $employees;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return 0;
        }
        $conn = null;
    }

    public function checkLoginCustomer($objCustomer)
    {
        try {
            $conn = ConnectionDatabase::getConnection();
            $query = $conn->prepare("SELECT * FROM Clientes WHERE emailCliente = :email");
            $email = $objCustomer->getUserEmail();
            $query->bindParam("email", $email);
            $query->execute();
            $customers = $query->fetch();
            return $customers;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return 0;
        }
        $conn = null;
    }

}