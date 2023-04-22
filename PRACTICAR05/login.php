<?php
if(isset($_POST["usuario"]) && isset($_POST["contra"])){
    $usuario=$_POST["usuario"];
    $contrasena=$_POST["contra"];
}

if(($usuario=="Ana" or $usuario=="Marta" or $usuario=="Jose" or $usuario=="Sergio") && ($contrasena=="123456")){
    header("Location:lista.php");
}
else{
    setcookie("fallo", $usuario, time() + 60 * 60 * 24 * 7);
    header("location:acceso.php");
}
?>
