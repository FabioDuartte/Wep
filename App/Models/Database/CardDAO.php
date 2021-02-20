<?php

namespace App\Models\Database;

use \PDO;
use \PDOException;

class CardDAO
{
    public function insertIntoCard($objCard, $idCliente)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare("INSERT INTO Cartoes (numeroCartao, bandeiraCartao, validadeCartao, cvvCartao, Clientes_idCliente)
            Values (:numeroCartao, :bandeiraCartao, :validadeCartao, :cvvCartao, :Clientes_idCliente)");
            $cardNumber = $objCard->getCardNumber();
            $cardBrand = $objCard->getCardBrand();
            $cardExpiry = $objCard->getCardExpiry();
            $cardCvv = $objCard->getCardCvv();
            $query->bindParam("numeroCartao", $cardNumber);
            $query->bindParam("bandeiraCartao", $cardBrand);
            $query->bindParam("validadeCartao", $cardExpiry);
            $query->bindParam("cvvCartao", $cardCvv);
            $query->bindParam("Clientes_idCliente", $idCliente);
            $query->execute();
            $lastID = $dbh->lastInsertId();
            return $lastID;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }
        $dbh = null;
    }

    public function selectCard($idCliente)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('SELECT * FROM Cartoes WHERE Clientes_idCliente = :idCliente');
            $query->bindParam('idCliente', $idCliente);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }
}