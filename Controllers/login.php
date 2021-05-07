<?php


include '../Models/user_model.php';

class Login extends User_model
{

    public function Register()
    {
        $user = new User_model();
        $user->Register();
    }
}
