<?php

namespace App\Models\Database;

use \PDO;
use \PDOException;

class MenuFoodsDAO
{
    public function insertIntoFood($objMenuFood)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            
        } catch (PDOException $e) {
            
        }
    }

    public function selectFromSpecificFood($typedName)
    {
        try {
            $dbh = ConnectionDatabase::getConnection();
            $query = $dbh->prepare('SELECT * FROM Comidas WHERE Nome LIKE %:typedName%');
            $query->bindParam("typedName", $typedName);
            $query->execute();
            $listFood = $query->fetchAll(PDO::FETCH_ASSOC);
            return $listFood;
        } catch (PDOException $e) {
            echo  "<script>alert('Erro');</script>";
            return null;
        }
        $dbh = null;
    }

    public function selectAllFromFoods($objMenuFood)
    {
        $dbh = ConnectionDatabase::getConnection();
        $query = $dbh->prepare('SELECT * FROM Comidas WHERE');
        $query->execute();
        while ($query->fetch()) {
            $allFoods[] = $query->fetch(PDO::FETCH_ASSOC);
        }
        return $allFoods;
    }


}