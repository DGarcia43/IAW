<?php
if(isset($_GET["nombre"]) && isset($_GET["password"] )){
    $nombre=$_GET ["nombre"];
    $password=$_GET ["password"];
    if ($nombre=="usuario1" && $password=="12345"){
        setcookie("nombre",$nombre, time()+60*60*24*7);
        setcookie("password",$password, time()+60*60*24*7);
}
    else{
        header("Location:formulario1.php");
    }

}
else if(isset($_COOKIE["nombre"]) && isset($_COOKIE["password"] )){
    $nombre=$_COOKIE ["nombre"];
    $password=$_COOKIE ["password"];
    if($nombre!="usuario1" || $password!="12345"){
        setcookie("nombre", false, time() -1);
        setcookie("password", false, time()-1);
        header("Location:formulario1.php");
    }
}
else{
    header("Location:formulario1.php");
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Hola <?=$nombre?></h1>
    <p><a href="cerrar.php"></a></p>
</body>
</html>
