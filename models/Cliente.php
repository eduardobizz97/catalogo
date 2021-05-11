<?php

class Cliente {

   private $db;
   private $cliente;

    public function __construct(){
        $conect = new Conexion();
        $cliente = $conect->prepare('select * from clientes');
        echo json_encode($cliente->fetch());   

    }


}



?>