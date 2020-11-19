<?php

namespace Utils;

class DataProcessing
{

    public function validateEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return $email;
        } else {
            return false;
        }
    }
        

    public function passwordToHash($password)
    {
        $password = password_hash($password, PASSWORD_BCRYPT, ['cost' => 10]);
        return $password;
    }

    function cleanInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    public function sanitizeInt($data)
    {
        return filter_var($data, FILTER_SANITIZE_NUMBER_INT);
    }

    public function validateName($name){
        return preg_match("/^[a-zA-Z-' ]*$/",$name);
    }
}


// $password = "cdfunc" | "tompero; 
