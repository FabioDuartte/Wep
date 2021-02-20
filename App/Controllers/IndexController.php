<?php

namespace App\Controllers;

session_start();

class IndexController
{

    public function index()
    {
        $_SESSION = array();
        $_SESSION['user-type'] = '';
        ViewController::index();
    }

    public function home()
    {
        ViewController::home();
    }

    public function soon()
    {
        ViewController::soon();
    }
}
