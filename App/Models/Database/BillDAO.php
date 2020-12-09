<?php

namespace App\Models\Database;

use App\Models\Bill;
use \PDO;
use \PDOException;

class BillDAO
{
    public function createBill($objBill, $newBonus)
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

    public function getBillTotalAmountOnDB($objBill)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('SELECT SUM(ItensPedidosPeloCliente.qtdItensPedidos * Produtos.precoProduto) as price FROM Contas
            INNER JOIN Pedidos ON Contas.idConta = Pedidos.Conta_idConta
             INNER JOIN ItensPedidosPeloCliente ON ItensPedidosPeloCliente.Pedido_idPedido = Pedidos.idPedido
              INNER JOIN Produtos ON ItensPedidosPeloCliente.Produto_idProduto = Produtos.idProduto
               WHERE ItensPedidosPeloCliente.statusItemPedido = 0 AND Contas.Cliente_idCliente = :idCustomer');
            $idCustomer = $objBill->getCustomerOwnerBill();
            $query->bindParam('idCustomer', $idCustomer);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC); // Trocar para ALL se eu for alterar para vários cartões
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function getOrdersToPay($objBill)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('SELECT Pedidos.idPedido, Produtos.nomeProduto, ItensPedidosPeloCliente.qtdItensPedidos, Produtos.precoProduto FROM Contas
            INNER JOIN Pedidos ON Contas.idConta = Pedidos.Conta_idConta
             INNER JOIN ItensPedidosPeloCliente ON ItensPedidosPeloCliente.Pedido_idPedido = Pedidos.idPedido
              INNER JOIN Produtos ON ItensPedidosPeloCliente.Produto_idProduto = Produtos.idProduto
               WHERE ItensPedidosPeloCliente.statusItemPedido = 0 AND Contas.Cliente_idCliente = :idCustomer');
            $idCustomer = $objBill->getCustomerOwnerBill();
            $query->bindParam('idCustomer', $idCustomer);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function updateCustomerBonus($objBill, $newBonus)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('UPDATE Clientes SET bonusCliente = :newBonus WHERE idCliente = :idCustomer');
            $idCustomer = $objBill->getCustomerOwnerBill();
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
