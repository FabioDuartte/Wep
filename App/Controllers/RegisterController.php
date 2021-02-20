<?php

namespace App\Controllers;

use App\Models\Customer;
use App\Models\Card;
use Utils\DataProcessing;

session_start();

class RegisterController extends DataProcessing
{
    public function register()
    {
        if ($_POST) {
            $_SESSION['error']='';
            $this->registerValidate();
        } else {
            ViewController::cadastro();
        }
    }

    public function registerValidate()
    {
        $userName = parent::cleanInput($_POST['username']);
        $userCardBrand = parent::cleanInput($_POST['card-brand']);
        $userCardExpiry = parent::ignoreNegative(parent::sanitizeInt(parent::cleanInput($_POST['card-expiring'])));
        $userCardNumber = parent::ignoreNegative(parent::sanitizeInt(parent::cleanInput($_POST['card-number'])));
        $userCardCvv = parent::ignoreNegative(parent::sanitizeInt(parent::cleanInput($_POST['card-cvv'])));
        $userCPF = parent::ignoreNegative(parent::sanitizeInt(parent::cleanInput($_POST['CPF'])));
        $userEmail = parent::validateEmail(parent::cleanInput($_POST['email']));

        if (!is_numeric($userCPF) || strlen($userCPF) != 11) {
            $_SESSION['error'] = "CPF invalido";            
            $this->registerFail();
        }

        if (!is_numeric($userCardNumber) || strlen($userCardNumber) < 14) {
            $_SESSION['error'] = "Número do cartão Inválido";
            $this->registerFail();
        }

        if (!is_numeric($userCardCvv) || !is_numeric($userCardExpiry)) {
            $_SESSION['error'] = "Usuário ou  CVV inválidos";
            $this->registerFail();
        }

        if (is_numeric($userName)) {
            $_SESSION['error'] = "Nome invalido";
            $this->registerFail();
        }

        if ($_POST['password'] === $_POST['re-password']) {
            $userPassword = $_POST['password'];
        } else {
            $_SESSION['error'] = "O campo senha e confirmar senha não conferem ";
            $this->registerFail();
        }

        if (!$userEmail || strpos($userEmail, '@caldeiraofurado.com')) {
            $_SESSION['error'] = "Email invalido";
            $this->registerFail();
        }

        if (!parent::validateName($userName)) {
            $_SESSION['error'] = "Nome inválido";
            $this->registerFail();
        }

        $userPassword = parent::passwordToHash($userPassword);
        $objCustomer = new Customer($userName, $userEmail, $userCPF, $userPassword);
        
        $emailExists = $objCustomer->checkEmailInDB();

        if ($emailExists) {
            $_SESSION['error'] = "Email já cadastrado";
            $this->registerFail();
        }

        if ($userCardNumber && $userCardBrand && $userCardExpiry && $userCardCvv) {
            $card = $this->addCustomerCard($userCardNumber, $userCardBrand, $userCardExpiry, $userCardCvv);
            $objCustomer->setCustomerCard($card);
            $idCliente = $objCustomer->registerCustomer();
            $this->addCardToBD($objCustomer, $idCliente);
        } else {
            $_SESSION['error'] = "Dados do cartão inválido";
            $this->registerFail();
        }
        
        $_SESSION['success'] = "Cadastro foi efetuado com sucesso";
        header("Location: /Wep/login");

    }

    private function registerFail()
    {
        $_POST = array();
        header("Location: /Wep/cadastro");
        exit;
    }

    private function addCardToBD($objCustomer, $idCliente)
    {
        foreach ($objCustomer->getCustomerCards() as $customerCard) {
            $customerCard->insertIntoCard($idCliente);
        }
    }

    private function addCustomerCard($userCardNumber, $userCardBrand, $userCardExpiry, $userCardCvv)
    {
        $objCard = new Card($userCardNumber, $userCardBrand, $userCardExpiry, $userCardCvv);
        return $objCard;
    }
    
}
