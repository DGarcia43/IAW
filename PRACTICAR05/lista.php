<?php
include_once "conexion.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h1{
            text-align: center;
        }
        form{
            text-align: center;
        }
        input{
            width: 80%;
            height: 30px;
        }
        button{
            background-color: aqua;
            width: 80%;
            height: 30px;
        }

    </style>
</head>
<body>
    <h1>Lista de tareas</h1>
    <form method="post" action="nuevastareas.php">
     <label for="tarea"></label>
    <input id="tarea" name="tarea" placeholder="Escriba una nueva tarea"><br><br>
    <button>Añadir</button>
</form>
<section>
    <ul>
        <h2>Lista</h2>
        <?php
        $con=getConexion();
        $sql="SELECT id_lista,tarea FROM lista";
        $st=$con->prepare($sql);
        $st->execute();
        $st->bind_result($id,$tarea);
        while($st->fetch()){
            echo $tarea;
        }
        $con->close()
        ?>
    </ul>
</section>
    <a href="borrar.php?id=$id">Borrar lista</a> <br>
    <a href="acceso.php">Volver</a>
</body>
</html>
