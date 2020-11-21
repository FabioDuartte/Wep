<?php

namespace App\Models\Database;

class RegisterDAO
{

    public function createRegisterCustomer($objCustomer)
    {
        try {
            $conn = ConnectionDatabase::getConnection();
            $query = $conn->prepare("INSERT INTO Clientes (nomeCliente, emailCliente, senhaCliente, bonusCliente, cpfCliente)
             VALUES (:nomeCliente, :emailCliente, :senhaCliente, :bonusCliente, :cpfCliente)");
            $query->bindParam("nomeCliente", $objCustomer->getUserName());
            $query->bindParam("emailCliente", $objCustomer->getUserEmail());
            $query->bindParam("senhaCliente", $objCustomer->getUserPassword());
            $query->bindParam("bonusCliente", $objCustomer->getCustomerBonus());
            $query->bindParam("cpfCliente", $objCustomer->getCustomerCpf());
            $query->execute();
            $lastID = $conn->lastInsertId();
            return $lastID;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return 0;
        }
        $conn = null;
    }

    public function checkEmailInDB($objCustomer)
    {
        try {
            $conn = ConnectionDatabase::getConnection();
            $query = $conn->prepare('SELECT emailCliente FROM Clientes WHERE emailCliente = :email');
            $query->bindParam(':email', $objCustomer->getUserEmail());
            $query->execute();
            $rowAffect = $query->rowCount();
            return $rowAffect;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return 0;
        }
        $conn = null;
    }

}
