<?php

namespace App\Controllers;

session_start();

class MenuController
{

    public function mainCourse()
    {
        ViewController::pratos();
    }

    public function drinks()
    {
        ViewController::bebidas();
    }
}