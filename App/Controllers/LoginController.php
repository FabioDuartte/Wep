<?php

namespace App\Controllers;

use Utils\DataProcessing;
use App\Models\Customer;
use App\Models\Employee;

session_start();

class LoginController extends DataProcessing
{
    private $frontController;

    public function __construct()
    {
        $this->viewController = new ViewController();
    }

    public function login()
    {
        if ($_POST) {
            $this->loginValidation();
        }
        $this->viewController->login();
    }

    public function loginValidation()
    {
        $userEmail = $this->validateEmail($this->cleanInput($_POST['email']));
        $userPassword = $_POST["password"];
        
        if (!$userEmail) {
            // echo "Email invalido";
            $this->loginFail();
        } else if (strpos($userEmail, '@caldeiraofurado.com')) {
            $objEmployee = new Employee("", $userEmail, "", $userPassword, "");
            $user = $objEmployee->loginEmployee();
            if (!$user) {
                // echo "Email incorreto";
                $this->loginFail();
            } else {
                if (password_verify($userPassword, $user['senhaFuncionario'])) {
                    $this->setSessionEmployee($user);
                    header("Location: /Wep/home");
                } else {
                    // echo "Senha incorreta"
                    $this->loginFail();
                }
            }
        } else {
            $objCustomer = new Customer("", $userEmail, "", $userPassword);
            $user = $objCustomer->loginCustomer();
            if (!$user) {
                // echo "Email incorreta";
                $this->loginFail();
            } else {
                if (password_verify($userPassword, $user['senhaCliente'])) {
                    $this->setSessionCustomer($user);
                    header("Location: /Wep/home");
                } else {
                    // echo "Senha incorreta"
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
        $_SESSION['user-type'] = ($user['cargo'] === "Gerente") ? "Gerente" : "Funcionario";
    }

    private function setSessionCustomer($user)
    {
        $_SESSION['id-user'] = $user['idCliente'];
        $_SESSION['user-name'] = $user['nomeCliente'];
        $_SESSION['user-Bonus'] = $user['bonusCliente'];
        $_SESSION['user-type'] = "Cliente";
    }

    public function recovery()
    {
        $this->viewController->recovery();
    }

}
