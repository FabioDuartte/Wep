<?php

namespace App\Controllers;

use Utils\DataProcessing;
use App\Models\Customer;
use App\Models\Database\RegisterDAO;

session_start();

class UpdateRegisterController extends DataProcessing
{
    public function updateRegistration()
    {
        if ($_POST) {
            $this->updateRegistraxionValidaxion();
        } else {
            ViewController::editarCadastro();
        }
    }

    private function updateRegistraxionValidaxion()
    {
        $newEmail = $this->validateEmail($this->cleanInput($_POST['new-Email']));
        $oldPassword = $_POST['old-Password'];

        if (!$oldPassword) {
            // echo 'É necessário passar a senha antiga para atualizar cadastro';
            $this->updateRegistrationFail();
        }

        if (strpos($newEmail, '@caldeiraofurado.com')) {
            // echo 'Email invalido';
            $this->updateRegistrationFail();
        }

        if ($_POST['new-Password'] === $_POST['re-newPassword']) {
            $newPassword = $_POST['new-Password'];
        } else {
            // echo "Senhas digitadas não são iguais";
            $this->updateRegistrationFail();
        }

        $objCustomer = new Customer("", "", "", "");
        $objCustomer->setCustomerId($_SESSION['id-user']);
        if ($objCustomer->checkEmailInDB()) {
            // echo "Email já cadastrado";
            $this->updateRegistrationFail();
        } else {
            $userPassword = $objCustomer->verifyPassword();
            if (password_verify($oldPassword, $userPassword['senhaCliente'])) {
                if ($newEmail) {
                    $objCustomer->setUserEmail($newEmail);
                    $objCustomer->updateRegisterEmailCustomer();
                }

                if ($newPassword) {
                    $newPassword = $this->passwordToHash($newPassword);
                    $objCustomer->setUserPassword($newPassword);
                    $objCustomer->updateRegisterPasswordCustomer();
                }
            } else {
                // echo "A senha antiga não está correta";
                $this->updateRegistrationFail();
            }
        }

        // echo "Tudo ocorreu bem";
        header('Location: /Wep/home/editar-cadastro');
    }

    private function updateRegistrationFail()
    {
        $_POST =  array();
        header('Location: /Wep/home/editar-cadastro');
        exit;
    }

}