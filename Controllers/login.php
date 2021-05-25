<?php


// include_once 'regex.php';
include '../Models/user_model.php';

if (isset($_POST['login'])) {

    $email = trim($_POST['user']);
    $password = $_POST['pass'];

    $login = new User_model();
    $user = $login->Autonfication($email, $password);

    // if (!preg_match(RG_PASSWORD, $password)) {

    //     $passwordErr = "Invalid password format";
    //     echo "<script>ErrPasswrdEmail();</script>";
    // } 
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
        // echo "<script>alert(\"l'email ou le mot de passe n'est pas correct\")</script>";
    }
}
