<?php

if (session_id() == '') {
    //session has not started
    session_start();
}

include '../Controllers/connect.php';

class User_model extends connect
{
    public $conn;
    public function __construct()
    {
        parent::__construct();
        $this->conn = $this->getConn();
    }

    public function Autonfication()
    {
        if (isset($_POST['login'])) {

            $user = trim($_POST['user']);
            $pass = md5(trim($_POST['pass']));

            $stm  = $this->conn->prepare("SELECT * FROM user WHERE login = :user and password = :pass");
            $stm->bindValue(':user',  $user, PDO::PARAM_STR);
            $stm->bindValue(':pass', $pass, PDO::PARAM_STR);
            $stm->execute();

            $row = $stm->fetch(PDO::FETCH_ASSOC);

            $RowCount = $stm->rowCount();

            if ($RowCount  == 1) {
                // Initialize the session
                session_start();

                if ($row['access'] == 1) {
                    $_SESSION['id'] =  $row['id_user'];
                    $_SESSION['access'] =  1;

                    // Redirect user to index.php
                    header("Location: admin.php");
                    die();
                } else {
                    $_SESSION['id'] = $row['id_user'];
                    $_SESSION['access'] =  0;

                    header("Location: reservation.php");
                    die();
                }
            }
        }
    }


    public function Register()
    {
        if (isset($_POST['register'])) {
            $user = $_POST['user'];
            $pass = md5($_POST['pass']);
            $access = 0;

            $fname = $_POST['fname'];
            $lname = $_POST['lname'];
            $phone = $_POST['phone'];

            $stm  = $this->conn->prepare("INSERT INTO user (login, password, access) VALUES (:user, :pass, :access)");
            $stm->bindValue(':user',  $user, PDO::PARAM_STR);
            $stm->bindValue(':pass',  $pass, PDO::PARAM_STR);
            $stm->bindValue(':access',  $access, PDO::PARAM_INT);
            $stm->execute();

            $stm1  = $this->conn->prepare("SELECT * FROM user WHERE login = :user");
            $stm1->bindValue(':user',  $user, PDO::PARAM_STR);
            $stm1->execute();
            $row = $stm1->fetch(PDO::FETCH_ASSOC);
            $fk_user = $row['id_user'];



            $stm2  = $this->conn->prepare("INSERT INTO client (nom_client, prenom_client, phone_client,fk_user) VALUES (:fname, :lname, :phone, :fk_user)");

            $stm2->bindValue(':fname',  $fname, PDO::PARAM_STR);
            $stm2->bindValue(':lname',  $lname, PDO::PARAM_STR);
            $stm2->bindValue(':phone',  $phone, PDO::PARAM_STR);
            $stm2->bindValue(':fk_user',  $fk_user, PDO::PARAM_INT);
            $stm2->execute();


            header("Location: login.php");
            die();
        }
    }
}
