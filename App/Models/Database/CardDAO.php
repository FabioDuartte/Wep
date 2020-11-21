<?php

namespace App\Models\Database;

class CardDAO
{
    public function insertIntoCard($objCard, $idCliente)
    {
        try {
            $conn = ConnectionDatabase::getConnection();
            $query = $conn->prepare("INSERT INTO Cartoes (numeroCartao, bandeiraCartao, validadeCartao, cvvCartao, Clientes_idCliente)
            Values (:numeroCartao, :bandeiraCartao, :validadeCartao, :cvvCartao, :Clientes_idCliente)");
            $query->bindParam("numeroCartao", $objCard->getCardNumber());
            $query->bindParam("bandeiraCartao", $objCard->getCardBrand());
            $query->bindParam("validadeCartao", $objCard->getCardExpiry());
            $query->bindParam("cvvCartao", $objCard->getCardCvv());
            $query->bindParam("Clientes_idCliente", $idCliente);
            $query->execute();
            $lastID = $conn->lastInsertId();
            return $lastID;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return 0;
        }
        $conn = null;
    }
}