<?php

namespace App\Models\Database;

use \PDO;
use \PDOException;

class ConnectionDataBase
{
    
    private $dbh = null;

    static public function getConnection()
    {
        $envPath = 'env.ini';
        $env = parse_ini_file($envPath);
        try {
            $dbh = new PDO("mysql:host={$env['serverPort']};dbname={$env['dbName']}", $env['dbUserName'], $env['dbPassword']);
            $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //return $dbh;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            //return $dbh;
            exit();
        }
    }
}