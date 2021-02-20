<?php

namespace App\Models\Database;

use \PDO;
use \PDOException;

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

    public function selectAllMenuItems($idProduct)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare("SELECT * FROM Produtos WHERE idProduto = :idProduct");
            $query->bindParam("idProduct", $idProduct);
            $query->execute();
            $rows = $query->fetch(PDO::FETCH_ASSOC);
            return $rows;
        } catch (PDOException $e) {
            echo "<script>alert('Erro');</script>";
            return null;
        }

        $dbh = null;
    }

    public function selectForTypeMenuItemFood()
    {
        $dbh = ConnectionDatabase::getConnection();
        try {
            $query = $dbh->prepare("SELECT * FROM Comidas");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "<script>alert('Erro');</script>";
            return null;
        }

        $dbh = null;
    }

    public function selectForTypeMenuItemDrinks()
    {
        $dbh = ConnectionDatabase::getConnection();
        try {
            $query = $dbh->prepare("SELECT * FROM Bebidas");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "<script>alert('Erro');</script>";
            return null;
        }

        $dbh = null;
    }

    public function selectItemByName($name)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare("SELECT * FROM Produtos WHERE nomeProduto = :name");
            $query->bindParam("name", $name);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "<script>alert('Erro');</scripy>";
            return null;
        }
        $dbh = null;
    }

    public function selectItemLikeName($nameToSearch)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('SELECT * FROM Produtos WHERE nomeProduto LIKE :nameToSearch');
            $nameToSearch = '%' . $nameToSearch . '%';
            $query->bindParam("nameToSearch", $nameToSearch);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOExeception $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function selectIgredients($idProduct)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('SELECT ingredientes FROM Comidas WHERE Produto_idProduto = :idProduto');
            $query->bindParam("idProduto", $idProduct);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }
        
        $dbh = null;
    }

    public function selectSupplier($idProduct)
    {
        try{
            $dbh = ConnectionDatabase::getConnection();   
            $query = $dbh->prepare('SELECT fornecedor FROM Bebidas WHERE Produto_idProduto = :idProduto');
            $query->bindParam("idProduto", $idProduct);
            $query->execute();
            return $query->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }
        
        $dbh = null;
    }

    public function verifyTypeByID($idProduct)
    {
        $dbh = ConnectionDatabase::getConnection();
        try {
            $query = $dbh->prepare("SELECT fornecedor FROM Bebidas WHERE Produto_idProduto = :idProduto");
            $query->bindParam("idProduto", $idProduct);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            echo "<script>alert('Erro');</script>";
            return null;
        }

        $dbh = null;
    }

    public function updateRegisterIngredientsFood($objMenu)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('UPDATE Comidas SET ingredientes = :ingredients WHERE Produto_idProduto = :idProduct');
            $ingredients = $objMenu->getIngredients();
            $idProduct = $objMenu->getMenuItemID();
            $query->bindParam("ingredients", $ingredients);
            $query->bindParam("idProduct", $idProduct);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return 0;
        }
        $dbh = null;
    }

    public function updateRegisterSupplierDrink($objMenu)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('UPDATE Bebidas SET fornecedor = :supplier WHERE Produto_idProduto = :idProduct');
            $supplier = $objMenu->getSupplier();
            $idProduct = $objMenu->getMenuItemID();
            $query->bindParam("supplier", $supplier);
            $query->bindParam("idProduct", $idProduct);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return 0;
        }
        $dbh = null;
    }

    public function updateProduct($objMenu)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare("UPDATE Produtos SET nomeProduto = :productName, precoProduto = :productPrice, imgProduto = :productImg WHERE idProduto = :idProduct");
            $productName = $objMenu->getMenuItemName();
            $productPrice = $objMenu->getMenuItemPrice();
            $productImg = $objMenu->getMenuItemImg();
            $productID = $objMenu->getMenuItemID();
            $query->bindParam("productName", $productName);
            $query->bindParam("productPrice", $productPrice);
            $query->bindParam("productImg", $productImg);
            $query->bindParam("idProduct", $productID);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function removeProduct($idProduct)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('DELETE FROM Produtos WHERE idProduto = :idProduct');
            $query->bindParam("idProduct", $idProduct);
            $query->execute();
            return true;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function removeItemFood($idProduct)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('DELETE FROM Comidas WHERE Produto_idProduto = :idProduct');
            $query->bindParam("idProduct", $idProduct);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }

    public function removeItemDrink($idProduct)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('DELETE FROM Bebidas WHERE Produto_idProduto = :idProduct');
            $query->bindParam("idProduct", $idProduct);
            $query->execute();
            return $query->rowCount();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            return null;
        }

        $dbh = null;
    }



}
