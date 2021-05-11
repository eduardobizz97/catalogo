<?php

class Conexion{
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $db = "catalogo_online";
    private $connect;


    public function __construct() {
        $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
        try {
            $this->connect = new PDO($connectionString,$this->user,$this->password);
            $this->connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
        } catch (Exception $e) {
            $this->connect = "Error en la conexión";
            echo "ERROR: ".$e->getMessage();
        }
    }

    public function prepare($sql){
        return $this->connect->query($sql);
        
    }
}

?>