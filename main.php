
<?php 
    include("conexion.php");

    $con = conectar();

    echo("Se realizó correctamente la base de datos.");

    $boton1 = "";
    if(isset($_POST['boton1'])) $boton1 = $_POST['boton1'];

    $boton2 = "";
    if(isset($_POST['boton2'])) $boton2 = $_POST['boton2'];

    $boton3 = "";
    if(isset($_POST['boton3'])) $boton1 = $_POST['boton3'];

?>|
