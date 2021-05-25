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
        $stmt  = $this->conn->prepare("SELECT * FROM user WHERE login = :user");
        $stmt->bindValue(':user', $email, PDO::PARAM_STR);
        $stmt->execute();

        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $hashPassword = $row['password'];
        $RowCount = $stmt->rowCount();


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
        $stmt  = $this->conn->prepare("INSERT INTO user (login, password, access) VALUES (:user, :pass, :access)");
        $stmt->bindValue(':user',  $email, PDO::PARAM_STR);
        $stmt->bindValue(':pass',  $password, PDO::PARAM_STR);
        $stmt->bindValue(':access',  $access, PDO::PARAM_STR);
        $stmt->execute();

        $stmt1  = $this->conn->prepare("SELECT * FROM user WHERE login = :user");
        $stmt1->bindValue(':user',  $email, PDO::PARAM_STR);
        $stmt1->execute();
        $row = $stmt1->fetch(PDO::FETCH_ASSOC);
        $fk_user = $row['id_user'];



        $stmt2  = $this->conn->prepare("INSERT INTO client (nom_client, prenom_client, phone_client,fk_user) VALUES (:fname, :lname, :phone, :fk_user)");

        $stmt2->bindValue(':fname',  $fname, PDO::PARAM_STR);
        $stmt2->bindValue(':lname',  $lname, PDO::PARAM_STR);
        $stmt2->bindValue(':phone',  $phone, PDO::PARAM_STR);
        $stmt2->bindValue(':fk_user',  $fk_user, PDO::PARAM_INT);
        $stmt2->execute();
    }
}
