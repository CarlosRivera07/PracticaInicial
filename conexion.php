<?php
    function conectar(){
        
        $con = new mysqli("localhost", "root", "", "db_practica") or die ("Error al concectar la base de datos");

        return $con;
    }
?>