<?php

if (empty(session_id())) {
    session_start();
}

if (empty(session_id())) {

    header('Location:login.php');
    die();
} else if ($_SESSION['access'] !=  "Admin") {
    header("Location: reservation.php");
    die();
}
