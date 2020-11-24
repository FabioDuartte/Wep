<?php

namespace App\Models\Database;

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
            echo  "<script>alert('Erro');</script>";
            return 0;
        }
        $dbh = null;
    }
}