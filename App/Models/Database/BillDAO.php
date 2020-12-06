<?php

namespace App\Models\Database;

use App\Models\Bill;
use \PDO;
use \PDOException;

class BillDAO
{
    public function createBill($objBill)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('INSERT INTO Contas (Cliente_idCliente) VALUES (:idCustomer)');
            $idCustomer = $objBill->getCustomerOwnerBill();
            $query->bindParam('idCustomer', $idCustomer);
            $query->execute();
            return $dbh->lastInsertId();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function checkBillExists($objBill)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('SELECT idConta FROM Contas WHERE Cliente_idCliente = :idCustomer');
            $idCustomer = $objBill->getCustomerOwnerBill();
            $query->bindParam('idCustomer', $idCustomer);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

}
