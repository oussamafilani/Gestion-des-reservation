<?php

if (empty(session_id())) {
    session_start();
}

if (empty(session_id())) {

    header('Location:login.php');
    die();
} else if ($_SESSION['access'] !=  "Client") {
    header("Location: admin.php");
    die();
}
