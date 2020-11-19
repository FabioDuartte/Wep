<?php

namespace App\Controllers;

use App\Models\Customer;
use App\Models\Card;
use Utils\DataProcessing;

session_start();

class RegisterController extends DataProcessing
{

    private $frontController;

    public function __construct()
    {
        $this->viewController = new ViewController();
    }

    public function register()
    {
        if ($_POST) {
            $this->registerValidate();
        } else {
            $this->viewController->cadastro();
        }
    }

    public function registerValidate()
    {
        $userName = $this->cleanInput($_POST['username']);
        $userCardBrand = $this->cleanInput($_POST['card-brand']);
        $userCardExpiry = $this->cleanInput($_POST['card-expiring']);
        $userCardNumber = $this->sanitizeInt($this->cleanInput($_POST['card-number']));
        $userCardCvv = $this->sanitizeInt($this->cleanInput($_POST['card-cvv']));
        $userCPF = $this->sanitizeInt($this->cleanInput($_POST['CPF']));
        $userEmail = $this->validateEmail($this->cleanInput($_POST['email']));

        if ($_POST['password'] === $_POST['re-password']) {
            $userPassword = $_POST['password'];
        } else {
            // echo "As senhas digitadas não são iguais";
            $this->registerFail();
        }

        if (!$userEmail || strpos($userEmail, '@calderaofurado.com')) {
            // echo "Email invalido";
            $this->registerFail();
        }

        if (!$this->validateName($userName)) {
            // echo "Nome invalido";
            $this->registerFail();
        }

        $userPassword = $this->passwordToHash($userPassword);
        $objCustomer = new Customer($userName, $userEmail, $userCPF, $userPassword);
        
        $emailExists = $objCustomer->checkEmailInDB();

        if ($emailExists) {
            // echo "Email já cadastrado";
            $this->registerFail();
        }

        $idCliente = $objCustomer->registerCustomer();

        if ($userCardNumber && $userCardBrand && $userCardExpiry && $userCardCvv) {
            $card = $this->addCustomerCard($userCardNumber, $userCardBrand, $userCardExpiry, $userCardCvv);
            $objCustomer->setCustomerCard($card);
            $this->addCardToBD($objCustomer, $idCliente);
        } else {
            // echo "Dados do cartão são invalido";
            $this->registerFail();
        }
        
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

    public function updateRegistration()
    {
        $this->viewController->editarCadastro();
    }
    
}
