<?php
setcookie("colores", false, time()-1);
header("Location:lista.php");
/*
 * cierre completo
 * unset($_SESSION);
 * session_destroy();
 */
?>