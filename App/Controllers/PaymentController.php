<?php

namespace App\Controllers;

use App\Models\Bill;
use App\Models\Card;
use App\Models\Customer;
use App\Models\Order;
use Utils\DataProcessing;

session_start();

class PaymentController extends DataProcessing
{
    public function payment()
    {
        $percentBonus = 0.1;
        $objBill = new Bill($_SESSION['id-user']);
        $objCard = new Card("", "", "", "");
        $objCustomer = new Customer("", "", "", "");
        $objOrder = new Order("", "");
        $objCustomer->setCustomerBonus($_SESSION['user-Bonus']);
        $billTotalAmount = $objBill->getBillTotalAmountOnDB();
        $objOrder->setOrderItems($objBill->getOrdersToPay());
        if ($billTotalAmount['price']) {
            $objBill->setBillTotalAmount($billTotalAmount['price']);
            $_SESSION['bill-total-amount'] = $objBill->getBillTotalAmount();
        } else {
            $_SESSION['cashback'] = 0;
            $objBill->setBillTotalAmount(0);
        }

        if ($_POST) {
            if ($_POST['bonus-to-apply']) {
                if ($objBill->getBillTotalAmount() <= 0) {
                    // echo "Você não tem uma conta para aplicar esse bonus";
                    $this->paymentFail();
                } else {
                    $this->caseTryApplyBonus($objCustomer, $objBill);
                }
            } else if ($_POST['clean-bonus']) {
                $this->cleanBonus($objCustomer);
            } else if ($_POST['pay']) {
                $this->payTheBill($objOrder, $objBill, $objCustomer);
            }
            $_POST = array();
        }
        
        $_SESSION['orders-to-pay'] = $objOrder->getOrderItems();
        $_SESSION['customer-card'] = $objCard->selectCard($objBill->getCustomerOwnerBill());
        $_SESSION['user-Bonus'] = $objCustomer->getCustomerBonus();
        ViewController::payment();
    }

    private function caseTryApplyBonus($objCustomer, $objBill)
    {
        $bonusToApply = parent::formatDataMoney(parent::cleanInput($_POST['bonus-to-apply']));
        if ($objCustomer->getCustomerBonus() >= $bonusToApply && is_numeric($bonusToApply) && $bonusToApply > 0) {
            $objCustomer->setCustomerBonus($objCustomer->getCustomerBonus() - $bonusToApply);
            $_SESSION['bonus-apply'] += $bonusToApply;
            if ($_SESSION['bonus-apply'] >= $objBill->getBillTotalAmount()) {
                $_SESSION['cashback'] = 0;
                $_SESSION['bill-total-amount-with-bonus'] = 0;
            } else {
                $_SESSION['cashback'] = ($objBill->getBillTotalAmount() - $_SESSION['bonus-apply']) * $percentBonus;
                $_SESSION['bill-total-amount-with-bonus'] = $objBill->getBillTotalAmount() - $_SESSION['bonus-apply'];
            }
        } else {
            // $_SESSION['error'] = "Valor passado não é permitido! Verifique se o seu bonus é maior que o bonus que você está tentando aplicar";
            $this->paymentFail();
        }
    }

    private function payTheBill($objOrder, $objBill, $objCustomer)
    {
        $objOrder->removeItemByCustomerID($objBill->getCustomerOwnerBill());
        if (!empty($objOrder->getOrderItems())) {
            foreach ($objOrder->getOrderItems() as $item) {
                if (!$objOrder->verifyOrderHaveItems($item['idPedido'])) {
                    $objOrder->removeOrder($item['idPedido']);
                }
            }
        } else {
            echo "Seu carrinho está vazio";
            $this->paymentFail();
        }
        $objCustomer->setCustomerBonus($objCustomer->getCustomerBonus() + $_SESSION['cashback']);
        $objCustomer->updateCustomerBonus($objBill->getCustomerOwnerBill(), $objCustomer->getCustomerBonus());
        if (!$objBill->verifyBillHaveOrders($objBill->getCustomerOwnerBill())) {
            $objBill->closeBill($objBill->getCustomerOwnerBill());
        }
        
        $this->setNullBillSession();
        $this->paymentFail();
    }

    private function setNullBillSession()
    {
        $_SESSION['cashback'] = 0;
        $_SESSION['bill-total-amount'] = 0;
        $_SESSION['bill-total-amount-with-bonus'] = 0;
        $_SESSION['bonus-apply'] = 0;
        $_SESSION['orders-to-pay'] = array();
        $_SESSION['customer-card'] = array();
    }
    
    private function cleanBonus($objCustomer)
    {
        $objCustomer->setCustomerBonus($objCustomer->getCustomerBonus() + $_SESSION['bonus-apply']);
        $_SESSION['bonus-apply'] = 0;
    }

    private function paymentFail()
    {
        $_POST = array();
        header("Location: /Wep/home/acompanhar-pedidos/realizar-pagamento");
        exit;
    }
}