<?php
if(isset($_GET["color"])){
    if(isset($_COOKIE["colores"])) {
        //copio el array actual de colores
        $colores=json_decode($_COOKIE["colores"], true);
    }
    else{
        //crear nuevo array vacio
        $colores=array();
    }
    array_push($colores,$_GET["color"]);
    setcookie("colores",json_encode($colores));
}
header("Location:lista.php");
?>