<?php
class connect
{

    // private $dns = 'mysql:host=localhost;dbname=records';
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "reservation_db";
    private $connexion;

    public function __construct()
    {
        try {
            // $this->connexion = new PDO($this->dns, $this->username, $this->password);
            $this->connexion = new PDO('mysql:host=' . $this->server . ';dbname=' . $this->db, $this->username, $this->password);
            # set the PDO error mode to exception
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            # echo "Connected successfully";
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getConn()
    {
        return $this->connexion;
    }
}
