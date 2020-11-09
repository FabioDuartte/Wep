<?php

namespace App\Models;

use \PDO;
use \PDOException;

class ConnectionDataBase
{
    static public function getConnection()
    {
        $serverPort = "";
        $dbUserName = "";
        $dbPassword = "";
        $dbName = "";
        try {
            $dbh = new PDO("mysql:host=$serverPort;dbname=$dbName", $dbUserName, $dbPassword);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //return $dbh;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            //return null;
        }
    }
} 