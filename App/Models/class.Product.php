<?php

namespace App\Models;

class Product
{
    protected $productName;
    protected $productPrice;
    protected $productID;

    public function __construct($productName, $productPrice, $productID)
    {
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->productID = $productID;
    }

    protected function getProductName()
    {
        return $this->productName;
    }
    
    protected function setProductName($productName)
    {
        $this->productName = $productName;
    }

    protected function getProductPrice()
    {
        return $this->productPrice;
    }

    protected function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
    }

    protected function getProductID()
    {
        return $this->productID;
    }

    protected function setProductID($productID)
    {
        $this->productID = $productID;
    }
}
