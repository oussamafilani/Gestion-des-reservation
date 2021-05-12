<?php
include '../Controllers/reservation.php';
$id = $_REQUEST['id'];
$delete = $reservation->delete($id);


if ($delete) {
    // echo "<script>alert('delete successfully');</script>";
    header('Location:admin.php');
}
