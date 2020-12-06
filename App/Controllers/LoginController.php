<?php

namespace App\Controllers;

use Utils\DataProcessing;
use App\Models\Customer;
use App\Models\Employee;

session_start();

class LoginController extends DataProcessing
{
    public function login()
    {   
        if ($_POST) {
            $_SESSION['error']='';
            $this->loginValidation();
        } else {
            ViewController::login();
        }
    }

    public function loginValidation()
    {
        $userEmail = parent::validateEmail(parent::cleanInput($_POST['email']));
        $userPassword = $_POST["password"];
        if (!$userEmail) {
            $_SESSION['error'] = "Email invalido";
            $this->loginFail();

        } else if (strpos($userEmail, '@caldeiraofurado.com')) {
            $objEmployee = new Employee("", $userEmail, "", $userPassword, "");
            $user = $objEmployee->loginEmployee();

            if (!$user) {
                $_SESSION['error'] = "Email incorreto" ;
                $this->loginFail();

            } else {
                if (password_verify($userPassword, $user['senhaFuncionario'])) {
                    $this->setSessionEmployee($user);
                    header("Location: /Wep/home");

                } else {
                    $_SESSION['error'] = "Senha incorreta";
                    $this->loginFail();
                }
            }

        } else {
            $objCustomer = new Customer("", $userEmail, "", $userPassword);
            $user = $objCustomer->loginCustomer();
            if (!$user) {
                $_SESSION['error'] = "Email incorreto";
                $this->loginFail();

            } else {
                if (password_verify($userPassword, $user['senhaCliente'])) {
                    $this->setSessionCustomer($user);
                    header("Location: /Wep/home");

                } else {
                    $_SESSION['error'] = "Senha incorreta";
                    $this->loginFail();
                }

            }
        }
        
    }

    private function loginFail()
    {
        $_POST = array();
        header("Location: /Wep/login");
        exit;
    }

    private function setSessionEmployee($user)
    {
        $_SESSION['id-user'] = $user['idFuncionario'];
        $_SESSION['user-name'] = $user['nomeFuncionario'];
        $_SESSION['all-orders-open'] = array();
        $_SESSION['user-type'] = ($user['cargo'] === "Gerente") ? "Gerente" : "Funcionario";
    }

    private function setSessionCustomer($user)
    {
        $_SESSION['id-user'] = $user['idCliente'];
        $_SESSION['user-name'] = $user['nomeCliente'];
        $_SESSION['user-Bonus'] = $user['bonusCliente'];
        $_SESSION['order'] = array();
        $_SESSION['cart-items-quantity'] = 0;
        $_SESSION['cart-items'] = array();
        $_SESSION['bill-amount'] = 0;
        $_SESSION['user-type'] = "Cliente";
    }

    public function recovery()
    {
        ViewController::recovery();
    }

}
