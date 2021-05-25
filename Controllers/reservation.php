<?php
include '../Models/reservation_model.php';

$reservation = new Reservation_model();

if (isset($_POST['reserver'])) {


    $c_date = date("Y/m/d");
    $date_d = $_POST['date_d'];
    $date_f = $_POST['date_f'];
    $array = $_POST['bien_type'];
    $batiment = $_POST['batiment'];
    $id_user = $_SESSION['id'];


    $reservation->insertReservation($c_date, $date_d, $date_f, $id_user);

    $reservation->insertChambre($array);

    $reservation->insertKids($array);

    $reservation->insertBatiment($batiment);
}

$rows = $reservation->fetchReservation();
