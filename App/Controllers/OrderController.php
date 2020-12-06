<?php

namespace App\Controllers;

use App\Models\Order;

session_start();

class OrderController
{
    public function customerOrders()
    {
        $maxValueItens = 200;
        $minValueItens = 1;
        if (!empty($_POST)) {
            if (isset($_POST['remove-cart-item'])) {
                unset($_SESSION['cart-items'][$_POST['product-id']]);
            } else if (isset($_POST['decrease-quantity'])) {
                if ($_SESSION['cart-items'][$_POST['product-id']]['product-quantity'] != $minValueItens) {
                    $_SESSION['cart-items'][$_POST['product-id']]['product-quantity']--;
                } else {
                    $_SESSION['cart-items'][$_POST['product-id']]['product-quantity'] = $minValueItens;
                }
            } else if (isset($_POST['increase-quantity'])) {
                if ($_SESSION['cart-items'][$_POST['product-id']]['product-quantity'] < $maxValueItens) {
                    $_SESSION['cart-items'][$_POST['product-id']]['product-quantity']++;
                } else {
                    $_SESSION['cart-items'][$_POST['product-id']]['product-quantity'] = $maxValueItens;
                }
            } else {
                $_SESSION['cart-items'][$_POST['product-id']] = $_POST;
                $_SESSION['cart-items'][$_POST['product-id']] += ["product-quantity" => $minValueItens];
                $_POST = array();
            }
            $_SESSION['bill-amount'] = 0;
            $_SESSION['cart-items-quantity'] = 0;
            foreach ($_SESSION['cart-items'] as $item) {
                $_SESSION['cart-items-quantity'] += $item['product-quantity'];
                $_SESSION['bill-amount'] += $item['product-price'] * $item['product-quantity'];
            }
        }
        ViewController::bill();
    }

    public function viewOrders()
    {
        if ($_GET) {
            
        }
        
        $objOrder = new Order("", "", "",);
        $_SESSION['all-orders-open'] = $objOrder->getAllOrdersOpen();
        ViewController::orders();
    }
}
