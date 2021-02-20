<?php

namespace App\Models\Database;

use \PDO;
use \PDOException;

class ConnectionDatabase
{

    static public function getConnection()
    {
        $envPath = 'env.ini';
        $env = parse_ini_file($envPath);
        try {
            $conn = new PDO("mysql:host={$env['serverPort']};dbname={$env['dbName']}", $env['dbUserName'], $env['dbPassword']);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            return null;
        }
    }

}
