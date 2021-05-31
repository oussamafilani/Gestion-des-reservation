<?php

// Initialize the session
if (empty(session_id())) {
    session_start();
}
error_reporting(0);

if (session_id()) {

    if ($_SESSION['access'] == "Admin") {
        header("Location: admin.php");
    } else if ($_SESSION['access'] == "Client") {
        header("Location: reservation.php");
    }
}
