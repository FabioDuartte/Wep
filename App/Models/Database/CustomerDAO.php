<?php

namespace App\Models\Database;

use App\Models\Customer;
use \PDO;
use \PDOException;

class CustomerDAO
{
    public function updateCustomerBonus($idCustomer, $newBonus)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('UPDATE Clientes SET bonusCliente = :newBonus WHERE idCliente = :idCustomer');
            $query->bindParam('newBonus', $newBonus);
            $query->bindParam('idCustomer', $idCustomer);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }
}