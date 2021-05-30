<?php

include_once 'regex.php';
include '../Models/user_model.php';


if (isset($_POST['register'])) {

    $register = new User_model();
    $bol = true;
    $email = trim($_POST['user']);
    $count = $register->CheckEmail($email);

    if ($count >= 1) {
        $bol = false;
        echo "<script>EmailCheck();</script>";
    }

    if (empty($_POST['pass'])) {
        $bol = false;
        echo "<script>FillFields('pasword format');</script>";
    } else if (!preg_match(RG_PASSWORD, $_POST['pass'])) {
        $bol = false;
        echo "<script>FillFields('pasword format');</script>";
    }
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);

    $access = "Client";

    $fname = ucfirst(strtolower(trim($_POST['fname'])));
    $lname = ucfirst(strtolower(trim($_POST['lname'])));
    $phone = trim($_POST['phone']);


    if (!preg_match(RG_EMAIL, $email)) {
        $bol = false;
        echo "<script>FillFields('email format');</script>";
    } else if (!preg_match(RG_PASSWORD, $password)) {
        $bol = false;
        echo "<script>FillFields('pasword format');</script>";
    } else  if (!preg_match(RG_NAME, $fname)) {
        $bol = false;
        echo "<script>FillFields('first name format');</script>";
    } else  if (!preg_match(RG_NAME, $lname)) {
        $bol = false;
        echo "<script>FillFields('last name format');</script>";
    } else  if (!preg_match(RG_PHONE, $phone)) {
        $bol = false;
        echo "<script>FillFields('phone format');</script>";
    }


    if ($bol) {
        $register->Register($email, $password, $access, $fname, $lname, $phone);

        header("Location: login.php");
        die();
    }
}
