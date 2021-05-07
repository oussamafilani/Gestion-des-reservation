<?php


include '../Models/reservation_model.php';

class Reservation extends Reservation_model
{
    public function Register()
    {
        $reservation = new Reservation_model();
        $reservation->insertReservation();
    }
}
