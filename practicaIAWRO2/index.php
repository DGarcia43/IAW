<?php
if(isset($_COOKIE["peli1"]) && isset($_COOKIE["peli2"]) && isset($_COOKIE["peli3"])) {
    $peli1 = $_COOKIE["peli1"];
    $peli2 = $_COOKIE["peli2"];
    $peli3 = $_COOKIE["peli3"];
}
if(isset($_GET["peli1"]) && isset($_GET["peli2"]) && isset($_GET["peli3"])) {
    $peli1 = $_GET["peli1"];
    $peli2 = $_GET["peli2"];
    $peli3 = $_GET["peli3"];
}
?>
<!doctype html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">
</head>
<body>
<main>
    <header>
        <h1>Votación de la mejor película</h1>
    </header>
    <article>
        <form action="formulario.php" method="get">
            <label for="peli1">Todo a la vez en todas partes</label>
            <input type="text" name="peli1" id="pelis">
            <label for="peli2">Sin novedad en el frente</label>
            <input type="text" name="peli2" id="pelis">
            <label for="peli3">Almas en pena de Inisherin</label>
            <input type="text" name="peli3" id="pelis">
            <button type="submit">Enviar</button>
        </form>
    </article>

</main>
</body>
</html>