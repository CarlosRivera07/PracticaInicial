<?php
function conectar(){
    $user = "root";
    $pass = "";
    $server = "localhost";
    $db = "db_practica";
    $con = new mysqli("localhost", "root", "", "db_practica") or die ("Error al concectar la base de datos");
    
    

    return $con;
}