
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
      body{
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
    <h1>Acceso de usuarios</h1>
    <form method="post" action="login.php">
        <input id="usuario" type="text" name="usuario" placeholder="Escriba su nombre de usuario"><br><br>
        <input type="password" id="contra" name="contra" placeholder="Escriba su contraseña"><br><br>
        <button>Entrar</button>
    </form>
    <?php
    if(isset($_COOKIE["fallo"])){
        echo "Autenticación erronea.";
        setcookie("error",false,time()-1);
    }
    ?>
</body>
</html>
