<?php
$colores="";
if(isset($_COOKIE["colores"])){
    //$colores=$_SESSION["colores"];
    $colores=json_decode($_COOKIE["colores"], true);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de colores</title>
    <style>
        div{
            width: 150px;
            height: 150px;
            display: inline-block;
        }
    </style>
</head>
<body>
<h1>Lista de colores</h1>
<?php
if($colores){
    foreach($colores as $i=>$color) {
        echo "<div style='background-color:$color'>" .
            "$i</div>";
    }
}
else{
    echo "<p>No hay colores elegido</p>";
}
?>
<p><a href="index.php">Elegir otro color</a></p>
</body>
</html>
