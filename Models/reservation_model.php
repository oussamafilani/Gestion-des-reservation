<?php

if (session_id() == '') {
    //session has not started
    session_start();
}

include '../Controllers/connect.php';

class Reservation_model extends connect
{
    public $conn;
    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConn();
    }


    public function insertReservation()
    {

        if (isset($_POST['reserver'])) {

            $c_date = date("Y/m/d");
            $date_d = $_POST['date_d'];
            $date_f = $_POST['date_f'];
            $id_user = $_SESSION['id'];

            $sql = $this->conn->query("SELECT * FROM client WHERE fk_user = '$id_user'");
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $fk_client = $row['id_client'];


            $stm  = $this->conn->prepare("INSERT INTO reservation (date_reservation, debut_sejour, fin_sejour, fk_client) VALUES (:date_r, :date_d, :date_f, :fk_client)");

            $stm->bindValue(':date_r',  $c_date, PDO::PARAM_STR);
            $stm->bindValue(':date_d',  $date_d, PDO::PARAM_STR);
            $stm->bindValue(':date_f',  $date_f, PDO::PARAM_STR);
            $stm->bindValue(':fk_client',  $fk_client, PDO::PARAM_INT);
            $stm->execute();

            $LastIdRes = $this->conn->lastInsertId();
            foreach ($_POST as $room => $val) {
                if (strpos($room, 'room') !== false) {

                    $arr = explode(',', $val);

                    $stm  = $this->conn->prepare("INSERT INTO panier (fk_bien, fk_pension, fk_reservation) VALUES (:id_bien, :id_pension, :LastIdRes)");


                    $stm->bindValue(':id_bien',  $arr[0], PDO::PARAM_INT);
                    $stm->bindValue(':id_pension',  $arr[1], PDO::PARAM_INT);
                    $stm->bindValue(':LastIdRes',  $LastIdRes, PDO::PARAM_INT);
                    $stm->execute();
                }
            }

            foreach ($_POST as $kid => $val) {
                if (strpos($kid, 'one_kid') !== false) {
                    $pension_kid = 3;


                    $stm  = $this->conn->prepare("INSERT INTO panier (fk_bien, fk_pension, fk_reservation) VALUES (:id_bien, :id_pension, :LastIdRes)");


                    $stm->bindValue(':id_bien',  $val, PDO::PARAM_INT);
                    $stm->bindValue(':id_pension',  $pension_kid, PDO::PARAM_INT);
                    $stm->bindValue(':LastIdRes',  $LastIdRes, PDO::PARAM_INT);
                    $stm->execute();
                }
            }
        }
    }

    public function fetchReservation()
    {
        $data = null;

        $query = "SELECT * FROM reservation INNER JOIN client ON reservation.fk_client = client.id_client";

        $sql = $this->conn->query($query);
        if ($sql) {
            while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        return $data;
    }
}
