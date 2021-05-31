<?php


include_once 'regex.php';
include '../Models/user_model.php';

if (isset($_POST['login'])) {

    $login = new User_model();
    $email = trim($_POST['user']);
    $password = $_POST['pass'];
    $bol = true;

    if (!preg_match(RG_PASSWORD, $password) || !preg_match(RG_EMAIL, $email)) {
        $bol = false;
        echo "<script>ErrPasswrdEmail();</script>";
    }

    if ($bol) {
        $user = $login->Autonfication($email, $password);

        if ($user == "Admin") {
            $_SESSION['access'] =  $user;
            // Redirect user to admin.php
            header("Location: admin.php");
            die();
        } else if ($user == "Client") {
            $_SESSION['access'] =  $user;
            // Redirect user to reservation.php
            header("Location: reservation.php");
            die();
        } else {
            echo "<script>ErrPasswrdEmail();</script>";
        }
    }
}
