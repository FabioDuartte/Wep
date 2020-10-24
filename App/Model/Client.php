<?php

namespace App\Model;

class Client extends Product {
    private $hello = "Hello World";

    public function ola(){
        echo $this->hello;
    }
}