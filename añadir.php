<?php
    
    $nam = $_POST['name'];
    $last = $_POST['lastName'];
    $number = $_POST['phoneNumber'];
    $age = $_POST['age'];

    $con = new mysqli("localhost", "root", "", "db_practica");

    $añadir = "INSERT INTO customer(name, lastName, phoneNumber, age) VALUES ('$nam', '$last', '$number', '$age')";
    $que = mysqli_query($con, $añadir);

    if($que){
        header("Location: muestra.php");
    }
        
    

?>