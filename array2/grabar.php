<?php
session_start();
if(isset($_GET["color"])){
    if(isset($_SESSION["colores"])) {
        //copio el array actual de colores
        $colores=$_SESSION["colores"];
    }
    else{
        //crear nuevo array vacio
        $colores=array();
    }
    array_push($colores,$_GET["color"]);
    $_SESSION["colores"]=$colores;
}
header("Location:lista.php");
?>