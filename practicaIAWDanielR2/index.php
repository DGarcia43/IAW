<?php
if(isset($_COOKIE["pelicula1"]) && isset($_COOKIE["pelicula2"]) && isset($_COOKIE["pelicula3"])) {
    $pelicula1 = $_COOKIE["pelicula1"];
    $pelicula2 = $_COOKIE["pelicula2"];
    $pelicula3 = $_COOKIE["pelicula3"];
}
if(isset($_GET["pelicula1"]) && isset($_GET["pelicula2"]) && isset($_GET["pelicula3"])) {
    $pelicula1 = $_GET["pelicula1"];
    $pelicula2 = $_GET["pelicula2"];
    $pelicula3 = $_GET["pelicula3"];
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
        <h1>Votacion de la mejor película</h1>
    </header>
    <article>
        <form action="formulario.php" method="get">
            <label for="pelicula1">Todo a la vez en todas partes</label>
            <input type="text" name="pelicula1" id="pelicula" value="">
            <label for="pelicula2">Sin novedad en el frente</label>
            <input type="text" name="pelicula2" id="pelicula" value="">
            <label for="pelicula3">Almas en pena de Inisherin</label>
            <input type="text" name="pelicula3" id="pelicula" value="">
            <button type="submit">Enviar</button>
        </form>
        <form action="borrar.php">
            <button type="submit" class="secundary">Borrar</button>
        </form>
    </article>
</main>
</body>
</html>