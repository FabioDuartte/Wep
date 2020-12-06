<?php

namespace App\Models\Database;

use \PDO;
use \PDOException;

class OrderDAO
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

    public function createOrder($objOrder)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('INSERT INTO Pedidos (valorTotalDosItensPedido, statusPedido, Conta_idConta) 
            VALUES (:valorTotalDosItensPedido, :statusPedido, :idConta)');
            $valorTotalDosItensPedido = $objOrder->getTotalOrderAmount();
            $statusPedido = $objOrder->isOrderStatus();
            $idConta = $objOrder->getIdBill();
            $query->bindParam("valorTotalDosItensPedido", $valorTotalDosItensPedido);
            $query->bindParam("statusPedido", $statusPedido);
            $query->bindParam("idConta", $idConta);
            $query->execute();
            return $dbh->lastInsertId();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function createItemsOrder($objOrder)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            foreach ($objOrder->getOrderItems() as $item) {
                $query = $dbh->prepare('INSERT INTO ItensPedidosPeloCliente (Pedido_idPedido, qtdItensPedidos, Produto_idProduto)
                 VALUES (:idOrder, :itemQuantity, :idProduct)');
                $idOrder = $objOrder->getOrderID();
                $itemQuantity = $item['product-quantity'];
                $idProduct = $item['product-id'];
                $query->bindParam('idOrder', $idOrder);
                $query->bindParam('itemQuantity', $itemQuantity);
                $query->bindParam('idProduct', $idProduct);
                $query->execute();
            }
            return true;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function selectItemsOrder($idCustomer)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('SELECT Pedidos.idPedido, ItensPedidosPeloCliente.statusItemPedido, Produtos.nomeProduto, ItensPedidosPeloCliente.idItensPedidosPeloCliente, ItensPedidosPeloCliente.qtdItensPedidos FROM Contas
             INNER JOIN Pedidos ON Contas.idConta = Pedidos.Conta_idConta
              INNER JOIN ItensPedidosPeloCliente ON ItensPedidosPeloCliente.Pedido_idPedido = Pedidos.idPedido
               INNER JOIN Produtos ON ItensPedidosPeloCliente.Produto_idProduto = Produtos.idProduto
                WHERE Contas.Cliente_idCliente = :idCustomer ORDER BY ItensPedidosPeloCliente.statusItemPedido DESC');
            $query->bindParam("idCustomer", $idCustomer);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function getAllOrdersOpen()
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('SELECT Contas.Cliente_idCliente, Produtos.nomeProduto, Pedidos.idPedido, ItensPedidosPeloCliente.qtdItensPedidos, ItensPedidosPeloCliente.idItensPedidosPeloCliente FROM Contas
            INNER JOIN Pedidos ON Contas.idConta = Pedidos.Conta_idConta
             INNER JOIN ItensPedidosPeloCliente ON ItensPedidosPeloCliente.Pedido_idPedido = Pedidos.idPedido
              INNER JOIN Produtos ON ItensPedidosPeloCliente.Produto_idProduto = Produtos.idProduto
               WHERE ItensPedidosPeloCliente.statusItemPedido = 1');
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function changeStatus($idItem)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('UPDATE ItensPedidosPeloCliente SET statusItemPedido = 0 WHERE idItensPedidosPeloCliente = :idItem');
            $query->bindParam("idItem", $idItem);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function removeItemOrder($idItemOrder)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('DELETE FROM ItensPedidosPeloCliente WHERE idItensPedidosPeloCliente = :idItemOrder');
            $query->bindParam("idItemOrder", $idItemOrder);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function verifyOrderHaveItems($idOrder)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('SELECT Pedido_idPedido FROM ItensPedidosPeloCliente WHERE Pedido_idPedido = :idOrder');
            $query->bindParam('idOrder', $idOrder);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function removeOrder($idOrder)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('DELETE FROM Pedidos Where idPedido = :idOrder');
            $query->bindParam('idOrder', $idOrder);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    

}