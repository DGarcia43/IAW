<?php
setcookie("nombre", false, time()-1);
setcookie("password", false, time()-1);
header("Location:formulario1.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button>Eliminar sesión</button>
</body>
</html>
