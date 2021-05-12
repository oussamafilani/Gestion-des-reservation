<?php

if (session_id() == '') {
    //session has not started
    session_start();
}

include 'connect.php';

class User_model extends connect
{
    public $conn;
    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConn();
    }

    public function Autonfication($email, $password)
    {
        $stm  = $this->conn->prepare("SELECT * FROM user WHERE login = :user");
        $stm->bindValue(':user', $email, PDO::PARAM_STR);
        $stm->execute();

        $row = $stm->fetch(PDO::FETCH_ASSOC);
        $hashPassword = $row['password'];
        $RowCount = $stm->rowCount();


        if ($RowCount  == 1 && !empty($row) && password_verify($password, $hashPassword)) {
            // Initialize the session
            session_start();
            $_SESSION['id'] =  $row['id_user'];
            return  $row['access'];
        } else {
            return false;
        }
    }


    public function Register($email, $password, $access, $fname, $lname, $phone)
    {
        $stm  = $this->conn->prepare("INSERT INTO user (login, password, access) VALUES (:user, :pass, :access)");
        $stm->bindValue(':user',  $email, PDO::PARAM_STR);
        $stm->bindValue(':pass',  $password, PDO::PARAM_STR);
        $stm->bindValue(':access',  $access, PDO::PARAM_STR);
        $stm->execute();

        $stm1  = $this->conn->prepare("SELECT * FROM user WHERE login = :user");
        $stm1->bindValue(':user',  $email, PDO::PARAM_STR);
        $stm1->execute();
        $row = $stm1->fetch(PDO::FETCH_ASSOC);
        $fk_user = $row['id_user'];



        $stm2  = $this->conn->prepare("INSERT INTO client (nom_client, prenom_client, phone_client,fk_user) VALUES (:fname, :lname, :phone, :fk_user)");

        $stm2->bindValue(':fname',  $fname, PDO::PARAM_STR);
        $stm2->bindValue(':lname',  $lname, PDO::PARAM_STR);
        $stm2->bindValue(':phone',  $phone, PDO::PARAM_STR);
        $stm2->bindValue(':fk_user',  $fk_user, PDO::PARAM_INT);
        $stm2->execute();
    }
}
