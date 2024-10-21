<?php
    echo "<p>Hola, " . "mundo!</p>";
    echo "<p>Hola, " , "mundo!</p>";

    // Ejemplo 3
    print "<p>Hola, mundo!</p>\n";

    // Ejemplo 5
    $nombre = "Adrian";
    print "<p>Hola, " . $nombre . "!</p>";

    echo "Hola, " , $nombre . "!";

    echo "Hola, " , $nombre , $nombre, "adios!"; // Con concatenar

    echo ("Hola, " . $nombre . $nombre . "adios!"); // Sin concatenar

    // Ejemplo 9
    print 10 + 20;

    // Ejemplo 10
    echo "<p>Este es un 'ejemplo' con comillas dobles y simples.</p>";

    $ciclo = "DAW";
    $modulo = "DWES";
    print "<p>";
    printf("%s es un módulo de %d curso de %s", $modulo, 2, $ciclo);
    print "</p>";

    printf("Número flotante con 2 decimales: %.2f\n", 3.14159);
    printf("Número flotante con 2 decimales: %.010.2f\n", 3.14159);

    printf("Esto es un porcentaje: 100%\n");

    $variable = printf("Esto es un porcentaje: 100%%\n");
    $variable2 = printf("Esto es un porcentaje: 100%%\n");
?>