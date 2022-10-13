<?php 
class connection {


private $servername = "localhost";
private $username = "root";
private $password = "";
private $db = "gestiondespromotions_v1";


public function connect(){ 

    $conn = new mysqli($this->servername,$this->username,$this->password,$this->db);
    return $conn;
}
}

?>