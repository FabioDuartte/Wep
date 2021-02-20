<?php

namespace App\Models\Database;

use App\Models\Employee;
use App\Models\Customer;
use \PDO;
use \PDOException;

class LoginDAO
{
    public function checkLoginEmployee($objEmployee)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare("SELECT * FROM Funcionarios WHERE emailFuncionario = :email");
            $email = $objEmployee->getUserEmail();
            $query->bindParam("email", $email);
            $query->execute();
            $employees = $query->fetch(PDO::FETCH_ASSOC);
            return $employees;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return 0;
        }
        $dbh = null;
    }

    public function checkLoginCustomer($objCustomer)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare("SELECT * FROM Clientes WHERE emailCliente = :email");
            $email = $objCustomer->getUserEmail();
            $query->bindParam("email", $email);
            $query->execute();
            $customers = $query->fetch(PDO::FETCH_ASSOC);
            return $customers;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return 0;
        }
        $dbh = null;
    }

}
