<?php
session_start();
unset($_SESSION["color"]);
header("Location:lista.php");
/*
 * cierre completo
 * unset($_SESSION);
 * session_destroy();
 */
?>