<?php

namespace Core\Model;

class Product {
    private $cu = "Tu és cuzão";
    public function getCu() {
        echo $this->cu;
    }
}