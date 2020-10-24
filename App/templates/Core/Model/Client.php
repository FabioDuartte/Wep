<?php

namespace Core\Model;

use Core\Model\Product;

class Client extends Product {
    private $hello = "Hello World";

    public function ola(){
        echo $this->hello;
    }
}