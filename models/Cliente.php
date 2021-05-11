<?php

class Cliente {

    private $db;
    private $idCliente;
    private $nombre;
    private $correo;
    private $contrasena;
 
     public function __construct(){
        $db = new Conexion();
        $this->db = $db;     
     }
 
     public function getClientes() {
        $sql = $this->db->prepare("select * from clientes");
        $json = $sql->fetch(PDO::FETCH_ASSOC);
        echo json_encode($json);
        echo $_SERVER['REQUEST_URI'];
        
     }


}



?>