<?php

namespace App\Models\Database;

class MenuDAO
{
    public function addItemToDatabaseMenu($objMenu)
    {
        try {
            $conn = ConnectionDatabase::getConnection();
            $query = $conn->prepare("INSERT INTO Produtos (nomeProduto, precoProduto) VALUES (:nomeProduto, :precoProduto)");
            $name = $objMenu->getMenuItemName();
            $price = $objMenu->getMenuItemPrice();
            $query->bindParam("nomeProduto", $name);
            $query->bindParam("precoProduto", $price);
            $query->execute();
            $lastID = $conn->lastInsertId();
            return $lastID;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return null;
        }
        $conn = null;
    }

    public function addDrinkToMenu($objMenu, $idProduct)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('INSERT INTO Bebidas (fornecedor, Produto_idProduto) VALUES (:fornecedor, :Produto_idProduto)');
            $supplier = $objMenu->getSupplier();
            $query->bindParam('fornecedor', $supplier);
            $query->bindParam('Produto_idProduto', $idProduct);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return null;
        }

        $dbh = null;
    }

    public function addFoodToMenu($objMenu, $idProduct)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('INSERT INTO Comidas (ingredientes, Produto_idProduto) VALUES (:ingredientes, :Produto_idProduto)');
            $ingredient = $objMenu->getIngredients();
            $query->bindParam('ingredientes',$ingredient);
            $query->bindParam('Produto_idProduto', $idProduct);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return null;
        }

        $dbh = null;
    }

    public function alterFood($objMenu, $idProduct)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('UPDATE Comidas SET (nome,preco,ingredientes, Produto_idProduto) VALUES (:nome,:preco,:ingredientes, :Produto_idProduto) WHERE nomeProduto = :nome');
            $ingredient = $objMenu->getIngredients();
            $query->bindParam('ingredientes',$ingredient);
            $query->bindParam('Produto_idProduto', $idProduct);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return null;
        }

        $dbh = null;
    }
}
