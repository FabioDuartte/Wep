<?php

namespace App\Models\Database;

use \PDO;
use \PDOException;

class RegisterDAO
{

    public function createRegisterCustomer($objCustomer)
    {
        try {
            $conn = ConnectionDatabase::getConnection();
            $query = $conn->prepare("INSERT INTO Clientes (nomeCliente, emailCliente, senhaCliente, bonusCliente, cpfCliente)
             VALUES (:nomeCliente, :emailCliente, :senhaCliente, :bonusCliente, :cpfCliente)");
            $name = $objCustomer->getUserName();
            $email = $objCustomer->getUserEmail();
            $password = $objCustomer->getUserPassword();
            $bonus = $objCustomer->getCustomerBonus();
            $cpf = $objCustomer->getCustomerCpf();
            $query->bindParam("nomeCliente", $name);
            $query->bindParam("emailCliente", $email);
            $query->bindParam("senhaCliente", $password);
            $query->bindParam("bonusCliente", $bonus);
            $query->bindParam("cpfCliente", $cpf);
            $query->execute();
            $lastID = $conn->lastInsertId();
            return $lastID;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return 0;
        }
        $conn = null;
    }

    public function verifyPassword($objCustomer)
    {
        try {
            $conn = ConnectionDatabase::getConnection();
            $query = $conn->prepare("SELECT senhaCliente FROM Clientes WHERE idCliente = :idCustomer");
            $idCustomer = $objCustomer->getCustomerId();
            $query->bindParam("idCustomer", $idCustomer);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return 0;
        }

        $conn = null;
    }

    public function updateRegisterEmailCustomer($objCustomer)
    {
        try {
            $conn = ConnectionDatabase::getConnection();
            $query = $conn->prepare('UPDATE Clientes SET emailCliente = :email WHERE idCliente = :idCustomer');
            $email = $objCustomer->getUserEmail();
            $idCustomer = $objCustomer->getCustomerId();
            $query->bindParam("email", $email);
            $query->bindParam("idCustomer", $idCustomer);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return 0;
        }
        $conn = null;
    }

    public function updateRegisterPasswordCustomer($objCustomer)
    {
        try {
            $conn = ConnectionDatabase::getConnection();
            $query = $conn->prepare('UPDATE Clientes SET senhaCliente = :pssword WHERE idCliente = :idCustomer');
            $password = $objCustomer->getUserPassword();
            $idCustomer = $objCustomer->getCustomerId();
            $query->bindParam('pssword', $password);
            $query->bindParam('idCustomer', $idCustomer);
            $query->execute();
            return true;
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
            $email = $objCustomer->getUserEmail();
            $query->bindParam('email', $email);
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
