<?php

// Bucle while

$contador = 0; // Inicialización de la variable $contador

while ($contador <= 10) {
    echo "<br>El contador es: $contador <br>"; // Imprime el valor de la variable $contador en cada iteración
    $contador++;
}

echo "<br>El contador ha terminado su ejecución"; // Imprime un mensaje al finalizar el bucle

// Bucle do-while

$contador = 0; // Inicialización de la variable $contador

do {
    echo "<br>El contador es: $contador <br>"; // Imprime el valor de la variable $contador en cada iteración
    $contador++;
} while ($contador <= 10);

echo "<br>El contador ha terminado su ejecución"; // Imprime un mensaje al finalizar el bucle

// Bucle for

for ($i = 0; $i <= 10; $i++) {
    echo "<br>El contador es: $i <br>"; // Imprime el valor de la variable $i en cada iteración
}

echo "<br>El contador ha terminado su ejecución"; // Imprime un mensaje al finalizar el bucle

// Bucle foreach

$personas = array("Juan", "Pedro", "Luis", "Ana", "María"); // Array de personas

foreach ($personas as $persona) {
    echo "<br>La persona es: $persona <br>"; // Imprime el valor de cada elemento del array
}

echo "<br>El bucle ha terminado su ejecución"; // Imprime un mensaje al finalizar el bucle

?>