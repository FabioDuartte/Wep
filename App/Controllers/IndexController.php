<?php

namespace App\Controllers;

class IndexController
{
    public function index()
    {
        // echo "<h1>Estou na index/IndexController.php</h1>";
        require '/home/renato/Wep/App/Templates/View/frontpage.php';
    }

    public function lista()
    {
        echo "<h1>Estou na lista/IndexController.php</h1>";
    }
}