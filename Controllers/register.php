<?php

include_once 'regex.php';
include '../Models/user_model.php';


if (isset($_POST['register'])) {

    $email = trim($_POST['user']);
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $access = "Client";

    $fname = ucfirst(strtolower(trim($_POST['fname'])));
    $lname = ucfirst(strtolower(trim($_POST['lname'])));
    $phone = trim($_POST['phone']);
    $bol = true;


    if (!preg_match(RG_EMAIL, $email)) {
        $bol = false;
        echo "<script>FillFields();</script>";
    } else if (!preg_match(RG_PASSWORD, $password)) {
        $bol = false;
        echo "<script>FillFields();</script>";
    } else  if (!preg_match(RG_NAME, $fname)) {
        $bol = false;
        echo "<script>FillFields();</script>";
    } else  if (!preg_match(RG_NAME, $lname)) {
        $bol = false;
        echo "<script>FillFields();</script>";
    } else  if (!preg_match(RG_PHONE, $phone)) {
        $bol = false;
        echo "<script>FillFields();</script>";
    }


    if ($bol == true) {

        $register = new User_model();
        $register->Register($email, $password, $access, $fname, $lname, $phone);

        header("Location: login.php");
        die();
    }
}
