<?php

class Cliente {

   private $db;
   private $cliente;

    public function __construct(){
        $conect = new Conexion();
        $cliente = $conect->prepare('select * from clientes');
        foreach ($clientes as $cliente) {
            echo $clientes;
        } 
        

    }


}



?>