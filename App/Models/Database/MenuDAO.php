<?php

namespace App\Models\Database;

class MenuDAO
{
    public function addItemToDatabaseMenu($objMenu)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare("INSERT INTO Produtos (nomeProduto, precoProduto, imgProduto) VALUES (:nomeProduto, :precoProduto, :productImg)");
            $name = $objMenu->getMenuItemName();
            $price = $objMenu->getMenuItemPrice();
            $img = $objMenu->getMenuItemImg();
            $query->bindParam("nomeProduto", $name);
            $query->bindParam("precoProduto", $price);
            $query->bindParam("productImg", $img);
            $query->execute();
            $lastID = $dbh->lastInsertId();
            return $lastID;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return null;
        }
        $dbh = null;
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
}