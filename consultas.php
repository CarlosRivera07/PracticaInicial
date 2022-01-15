<?php
    require 'conexion.php';

        $conectar = conectar();

        $consultar = "SELECT * FROM customer";
        $query = mysqli_query($conectar, $consultar);
        $array = mysqli_fetch_array($query);
        return $array;
    
    
        
    
?>