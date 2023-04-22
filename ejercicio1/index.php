<?php
if (isset($_GET["modo"])){
    $fondo="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css";
}
else{
    $fondo="https://cdn.jsdelivr.net/npm/water.css@2/out/dark.css";
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$fondo?>">
</head>
<body>
<h1>Elije el modo de trabajo</h1>
<form action="index.php" method="get">
    <input type="radio" name="modo" value="claro" id="claro">
    <label for="claro">Claro</label>
    <input type="radio" name="modo1" value="oscuro" id="oscuro">
    <label for="oscuro">Oscuro</label>
    <button>Enviar</button>
    <p><a href="siguiente.php?modo=<?=$fondo?>">Siguiente página</a></p>
</form>


</body>
</html>