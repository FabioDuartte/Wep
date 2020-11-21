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
            $this->registerValidate();
        } else {
            ViewController::cadastro();
        }
    }

    public function registerValidate()
    {
        $userName = $this->cleanInput($_POST['username']);
        $userCardBrand = $this->cleanInput($_POST['card-brand']);
        $userCardExpiry = $this->ignoreNegative($this->sanitizeInt($this->cleanInput($_POST['card-expiring'])));
        $userCardNumber = $this->ignoreNegative($this->sanitizeInt($this->cleanInput($_POST['card-number'])));
        $userCardCvv = $this->ignoreNegative($this->sanitizeInt($this->cleanInput($_POST['card-cvv'])));
        $userCPF = $this->ignoreNegative($this->sanitizeInt($this->cleanInput($_POST['CPF'])));
        $userEmail = $this->validateEmail($this->cleanInput($_POST['email']));

        if (!is_numeric($userCPF) || strlen($userCPF) != 11) {
            echo '<div class="alert alert-danger text-center font-weight-bold" role="alert">
                                CPF invalido
                            </div>';
            
            $this->registerFail();
        }

        if (!is_numeric($userCardNumber) || strlen($userCardNumber) < 14) {
            echo '<div class="alert alert-danger text-center font-weight-bold" role="alert">
                    Número do cartão inválido
                  </div>';
            $this->registerFail();
        }

        if (!is_numeric($userCardCvv) || !is_numeric($userCardExpiry)) {
            echo '<div class="alert alert-danger text-center font-weight-bold" role="alert">
                    Dados do Cartão invalido;
                </div>';
            $this->registerFail();
        }

        if ($_POST['password'] === $_POST['re-password']) {
            $userPassword = $_POST['password'];
        } else {
            echo '<div class="alert alert-danger text-center font-weight-bold" role="alert">
                                     Senha inválida
                                </div>';
            $this->registerFail();
        }

        if (!$userEmail || strpos($userEmail, '@caldeiraofurado.com')) {
            echo '<div class="alert alert-danger text-center font-weight-bold" role="alert">
                            Nome inválido
                    </div>';
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

        if ($userCardNumber && $userCardBrand && $userCardExpiry && $userCardCvv) {
            $card = $this->addCustomerCard($userCardNumber, $userCardBrand, $userCardExpiry, $userCardCvv);
            $objCustomer->setCustomerCard($card);
            $idCliente = $objCustomer->registerCustomer();
            $this->addCardToBD($objCustomer, $idCliente);
        } else {
            // echo "Dados do cartão são invalido";
            $this->registerFail();
        }
        
        // echo "Cadastro foi efetuado";
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
