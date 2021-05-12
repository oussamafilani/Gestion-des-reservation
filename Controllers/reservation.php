<?php


include '../Models/reservation_model.php';
$reservation = new Reservation_model();

if (isset($_POST['reserver'])) {

    $c_date = date("Y/m/d");
    $date_d = $_POST['date_d'];
    $date_f = $_POST['date_f'];
    $id_user = $_SESSION['id'];

    $arr = array();
    $arr_room = array();
    $arr_kid = array();
    $arr_appart = array();
    $arr_bung = array();

    foreach ($_POST as $room => $val) {
        if (strpos($room, 'room') !== false) {
            $arr = explode(',', $val);
            array_push($arr_room,  $arr);
        }
    }
    foreach ($_POST as $kid => $val) {
        if (strpos($kid, 'one_kid') !== false) {
            array_push($arr_kid,  $val);
        }
    }

    foreach ($_POST as $appart => $val) {
        if (strpos($appart, 'one_apprt') !== false) {
            array_push($arr_appart,  $val);
        }
    }

    foreach ($_POST as $bung => $val) {
        if (strpos($bung, 'one_bung') !== false) {
            array_push($arr_bung,  $val);
        }
    }
    $reservation->insertReservation($c_date, $date_d, $date_f, $id_user, $arr_room, $arr_kid, $arr_appart, $arr_bung);
}

$rows = $reservation->fetchReservation();
