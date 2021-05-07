<?php


include '../Models/user_model.php';

class Register extends User_model
{
    public function Register()
    {
        $user = new User_model();
        $user->Register();
    }
}
