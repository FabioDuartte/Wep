<?php

namespace App\Model;

class Product {
    private $check = "It's Work!!";
    public function getCheck() {
        echo $this->check;
    }
}