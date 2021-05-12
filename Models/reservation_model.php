<?php

if (session_id() == '') {
    //session has not started
    session_start();
}

include 'connect.php';

class Reservation_model extends connect
{
    public $conn;
    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConn();
    }


    public function insertReservation($c_date, $date_d, $date_f, $id_user, $arr_room, $arr_kid, $arr_appart, $arr_bung)
    {

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
        foreach ($arr_room as $val) {

            $stm  = $this->conn->prepare("INSERT INTO panier (fk_bien, fk_pension, fk_reservation) VALUES (:id_bien, :id_pension, :LastIdRes)");

            $stm->bindValue(':id_bien',  $val[0], PDO::PARAM_INT);
            $stm->bindValue(':id_pension',  $val[1], PDO::PARAM_INT);
            $stm->bindValue(':LastIdRes',  $LastIdRes, PDO::PARAM_INT);
            $stm->execute();
        }

        foreach ($arr_kid as $val) {
            $pension_kid = 3;
            $stm  = $this->conn->prepare("INSERT INTO panier (fk_bien, fk_pension, fk_reservation) VALUES (:id_bien, :id_pension, :LastIdRes)");

            $stm->bindValue(':id_bien',  $val, PDO::PARAM_INT);
            $stm->bindValue(':id_pension',  $pension_kid, PDO::PARAM_INT);
            $stm->bindValue(':LastIdRes',  $LastIdRes, PDO::PARAM_INT);
            $stm->execute();
        }

        foreach ($arr_appart as $val) {
            $pension = 3;
            $stm  = $this->conn->prepare("INSERT INTO panier (fk_bien, fk_pension, fk_reservation) VALUES (:id_bien, :id_pension, :LastIdRes)");


            $stm->bindValue(':id_bien',  $val, PDO::PARAM_INT);
            $stm->bindValue(':id_pension',  $pension, PDO::PARAM_INT);
            $stm->bindValue(':LastIdRes',  $LastIdRes, PDO::PARAM_INT);
            $stm->execute();
        }

        foreach ($arr_bung as $val) {
            $pension = 3;
            $stm  = $this->conn->prepare("INSERT INTO panier (fk_bien, fk_pension, fk_reservation) VALUES (:id_bien, :id_pension, :LastIdRes)");

            $stm->bindValue(':id_bien',  $val, PDO::PARAM_INT);
            $stm->bindValue(':id_pension',  $pension, PDO::PARAM_INT);
            $stm->bindValue(':LastIdRes',  $LastIdRes, PDO::PARAM_INT);
            $stm->execute();
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

    public function delete($id)
    {

        $query = "DELETE FROM reservation where id_reservation  = '$id'";
        if ($this->conn->query($query)) {
            return true;
        } else {
            return false;
        }
    }
}
