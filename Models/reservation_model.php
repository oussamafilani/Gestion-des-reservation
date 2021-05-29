<?php

include 'connect.php';

class Reservation_model extends connect
{
    public $conn;
    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConn();
    }

    public function insertReservation($c_date, $date_d, $date_f, $id_user)
    {
        $sql = $this->conn->query("SELECT * FROM client WHERE fk_user = '$id_user'");
        $row = $sql->fetch(PDO::FETCH_ASSOC);
        $fk_client = $row['id_client'];

        $stmt  = $this->conn->prepare("INSERT INTO reservation (date_reservation, debut_sejour, fin_sejour, fk_client) VALUES (:date_r, :date_d, :date_f, :fk_client)");

        $stmt->bindValue(':date_r',  $c_date, PDO::PARAM_STR);
        $stmt->bindValue(':date_d',  $date_d, PDO::PARAM_STR);
        $stmt->bindValue(':date_f',  $date_f, PDO::PARAM_STR);
        $stmt->bindValue(':fk_client',  $fk_client, PDO::PARAM_INT);
        $stmt->execute();
        $GLOBALS['LastIdRes'] = $this->conn->lastInsertId();
    }


    public function insertChambre($bien_type)
    {
        foreach ($bien_type as $val) {
            $stmt  = $this->conn->prepare("INSERT INTO panier (fk_bien, fk_pension, fk_reservation) VALUES ( (select id_Bien from bien where type_chambre = '$val[chambre]' and vue_bien = '$val[vue]' and categorie_age is NULL and (lit_chambre = '$val[bed]' or lit_chambre is Null )), ?, ?)");
            $stmt->execute(array($val['pension'], $GLOBALS['LastIdRes']));
        }
    }



    public function insertKids($arr_kid)
    {
        foreach ($arr_kid as $innerArray) {
            foreach ($innerArray as $key => $val) {
                if ($key == "kid") {
                    $pension_kid = 3;
                    $stmt  = $this->conn->prepare("INSERT INTO panier (fk_bien, fk_pension, fk_reservation) VALUES (:id_bien, :id_pension, :LastIdRes)");

                    $stmt->bindValue(':id_bien',  $val, PDO::PARAM_INT);
                    $stmt->bindValue(':id_pension',  $pension_kid, PDO::PARAM_INT);
                    $stmt->bindValue(':LastIdRes',  $GLOBALS['LastIdRes'], PDO::PARAM_INT);
                    $stmt->execute();
                }
            }
        }
    }

    public function insertBatiment($batiment)
    {
        foreach ($batiment  as $val) {

            $pension = 3;
            $stmt  = $this->conn->prepare("INSERT INTO panier (fk_bien, fk_pension, fk_reservation) VALUES (:id_bien, :id_pension, :LastIdRes)");

            $stmt->bindValue(':id_bien',  $val, PDO::PARAM_INT);
            $stmt->bindValue(':id_pension',  $pension, PDO::PARAM_INT);
            $stmt->bindValue(':LastIdRes',  $GLOBALS['LastIdRes'], PDO::PARAM_INT);
            $stmt->execute();
        }
    }


    public function fetchReservation()
    {
        $data = null;

        $query = "SELECT * FROM reservation INNER JOIN client ON reservation.fk_client = client.id_client";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        if ($stmt) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $data[] = $row;
            }
        }
        return $data;
    }

    public function fetch_single($id)
    {
        $data = null;

        $query = "SELECT * FROM reservation INNER JOIN client ON reservation.fk_client = client.id_client  and reservation.id_reservation =  :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindValue(':id',  $id, PDO::PARAM_INT);
        $stmt->execute();
        if ($stmt) {
            $data = $stmt->fetch(PDO::FETCH_ASSOC);
            return $data;
        }
    }




    public function delete($id)
    {

        $query = "DELETE FROM reservation where id_reservation  = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }

    public function CalculPrix($id)
    {
        $query = "SELECT SUM(b.prix_bien) * DATEDIFF(r.fin_sejour,r.debut_sejour) as total FROM panier p, reservation r,bien b where r.id_reservation =p.fk_reservation AND b.id_Bien = p.fk_bien AND p.fk_reservation = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row;
    }

    // public function CalculPrix()
    // {
    //     $query = "SELECT SUM(b.prix_bien) * DATEDIFF(r.fin_sejour,r.debut_sejour) as total FROM panier p, reservation r,bien b where r.id_reservation =p.fk_reservation AND b.id_Bien = p.fk_bien AND p.fk_reservation = ?";
    //     $stmt = $this->conn->prepare($query);
    //     $stmt->execute([$GLOBALS['LastIdRes']]);
    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);
    //     return $row['total'];
    // }
}
