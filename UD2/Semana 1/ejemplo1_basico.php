<?php

    echo "Hola Mundo, esto es PHP.";

    // Comentarios personales

    echo "<p>Primer script PHP.</p>";

    echo "<p>El lenguaje PHP es POCO TIPADO.</p>";

    $jueves; // Declarar una variable
    $jueves = "jueves"; // Cadena de caracteres

    $dia_mes = 14; // numérico
    echo "<p>Mostrando valores sin concatenar</p>";

    echo $jueves;
    echo $dia_mes;

    echo "<p>Concatenando variables</p>";

    echo "Hoy es " . $jueves . " " . $dia_mes;

    // $2hola ="Hola"; // Error sintáctico

    $talla_pantalon = 48;
    $precio = 19.99;
    $campaña = "2021/22";
    $descuento = true;
    $colores = array("rojo", 12, "verde", "azul");

    echo "<p>Mostrando valores de los tipos creados</p>";

    echo $talla_pantalon;
    echo $precio;
    echo $campaña;
    echo $descuento;
    echo $colores[2];

    class Persona {
        public $nombre;
        public function __construct($nombre) {
            $this->nombre = $nombre;
        }
    }

    $miPersona = new Persona("Javier");
    echo $miPersona->nombre;

    $x = 10; // Ámbito global


    function miFuncion() {
        $y = 5; // Variable local
        global $x; // Hace $x accesible dentro de la función
        echo $x; // Imprime: 10
        echo $y; // Imprime: 5
    }

    miFuncion(); // Imprime: 10

    function contador() {
        static $contador = 0; // Persiste su valor entre llamadas // El static hace que se incremental
        $contador++; // Incrementa el valor
        echo "<p>Contador: $contador</p>"; // Imprime el valor
    }
    
    contador(); // Imprime: 1
    contador(); // Imprime: 2
    contador(); // Imprime: 3
?>

<?php
    echo "MANUAL DE PHP";

    echo "<p>Conversaciones de tipos posibles y los resultados obtenidos: </p>";

    $foo2 - "5";
    echo $foo2;
    $foo2 = 5 + "10 cerditos pequeñitos";
    echo $foo2;

    $bar = 3.36;
    $foo3 = (int)$bar;

    echo "<br> FFO3 vale: $foo3";

    echo "<br> FFO3 vale: " . (int)$bar;
    $foo = $foo + 1.3;

?>