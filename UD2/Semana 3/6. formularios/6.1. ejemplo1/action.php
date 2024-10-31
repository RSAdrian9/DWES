<?php

    echo "HOLA, " . htmlspecialchars($_POST["nombre"]);
    echo "<br>";
    echo " Usted tiene " . $_POST["edad"] . " años";
?>