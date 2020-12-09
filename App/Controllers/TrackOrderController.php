<?php

namespace App\Controllers;

use App\Models\Bill;
use App\Models\Order;

session_start();

class TrackOrderController
{
    public function trackOrder()
    {
        $_SESSION['orders-placed'] = array();
        $objBill = new Bill($_SESSION['id-user']);
        $objOrder = new Order('', $_SESSION['cart-items']);
        if ($_POST) {
            if (empty($_SESSION['cart-items'])) {
                $this->trackOrderFail();
            } else {
                $idBill = $objBill->checkBillExists();
                if (!$idBill['idConta']) {
                    $idBill['idConta'] = $objBill->createBill();
                }
                $objOrder->setIdBill($idBill['idConta']);
                $objOrder->setOrderID($objOrder->createOrder());
                $objOrder->createItemsOrder();
                $_SESSION['cart-items'] = array();
                $_SESSION['cart-items-quantity'] = 0;
                $_SESSION['order-amount'] = 0;
            }
            $_POST = array();
        } else if (isset($_GET['cancel-order'])) {
            $objOrder->removeItemOrder($_GET['idItensPedidosPeloCliente']);
            if (!$objOrder->verifyOrderHaveItems($_GET['id-pedido'])) {
                $objOrder->removeOrder($_GET['id-pedido']);
            }
            $_GET = array();
        }
        $_SESSION['order'] = $objOrder->selectItemsOrder($_SESSION['id-user']);
        $objBill = null;
        $objOrder = null;
        ViewController::trackOrder();
    }

    private function trackOrderFail()
    {
        $_POST = array();
        header("Location: /Wep/home/minha-comanda");
        exit;
    }
}