<?php
if(isset($_GET["peli1"]) && isset($_GET["peli2"]) && isset($_GET["peli3"])) {
    $peli1 = $_GET["peli1"];
    $peli2 = $_GET["peli2"];
    $peli3 = $_GET["peli3"];

    if (is_numeric($peli1) && is_numeric($peli2) && is_numeric($peli3)) {
        if ($peli1>0 && $peli2>0 && $peli3>0 && $peli1<11 && $peli2<11 && $peli3<11) {
            setcookie("peli1", $peli1, time() + 60 * 60 * 24 * 7);
            setcookie("peli2", $peli2, time() + 60 * 60 * 24 * 7);
            setcookie("peli3", $peli3, time() + 60 * 60 * 24 * 7);
            header("location:index.php");
        }
        else {
            echo "<h1>" . "Error" . "</h1>";
            echo "<p style='color: red'>" . "Los valores deben ser del 1 al 10" . "</p>";
        }
    }
    else {
        echo "<h1>" . "Error" . "</h1>";
        echo "<p style='color: red'>" . "Los valores deben ser numéricos" . "</p>";
    }
}
?>