<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Resumen de la Semana 1 - PHP</title>
</head>
<body>

<h1>Resumen de la Semana 1 - PHP</h1>

<div class="section">
    <h2>1. Sintaxis Básica</h2>

    <h3>1.1 Variables y Tipos de Datos</h3>
    <p>PHP es un lenguaje débilmente tipado, lo que significa que no es necesario declarar el tipo de dato. Ejemplo:</p>
    <pre>
    <?php
    // Definimos algunas variables con diferentes tipos de datos
    $nombre = "Juan";  // String
    $edad = 25;        // Entero
    $precio = 12.50;   // Float

    // Imprimir valores usando echo
    echo "Mi nombre es $nombre, tengo $edad años y el precio es $precio.";
    ?>
    </pre>

    <h3>1.2 Operadores</h3>
    <p>PHP soporta los operadores básicos como suma, resta, multiplicación y división. Ejemplos:</p>
    <pre>
    <?php
    $a = 10;
    $b = 20;

    echo "Suma: " . ($a + $b) . "\n";
    echo "Resta: " . ($a - $b) . "\n";
    echo "Multiplicación: " . ($a * $b) . "\n";
    echo "División: " . ($a / $b) . "\n";
    ?>
    </pre>
</div>

<div class="section">
    <h2>2. Imprimiendo en pantalla (echo y print)</h2>

    <h3>2.1 Uso de echo</h3>
    <p><code>echo</code> es una construcción del lenguaje que se usa para imprimir en pantalla. Permite imprimir múltiples argumentos a la vez:</p>
    <pre>
    <?php
    // Usando echo para imprimir múltiples cadenas a la vez
    echo "Hola, ", "esto es PHP ", "y echo puede imprimir múltiples cadenas.";
    ?>
    </pre>

    <h3>2.2 Uso de print</h3>
    <p><code>print</code> es otra forma de imprimir, pero solo acepta un argumento a la vez:</p>
    <pre>
    <?php
    // Usando print para imprimir una sola cadena
    print("Hola, esto es una impresión usando print.");
    ?>
    </pre>

    <h3>2.3 Diferencias entre echo y print</h3>
    <ul>
        <li><strong>echo</strong> puede imprimir varios valores separados por comas.</li>
        <li><strong>print</strong> solo acepta un argumento, pero retorna un valor (1) lo que permite usarlo en expresiones.</li>
    </ul>
</div>

<div class="section">
    <h2>3. Datos y Funciones</h2>

    <h3>3.1 Arrays</h3>
    <p>Los arrays en PHP pueden ser indexados (con índices numéricos) o asociativos (con claves). Ejemplo de ambos:</p>
    <pre>
    <?php
    // Array indexado
    $frutas = array("Manzana", "Plátano", "Naranja");
    echo "Fruta favorita: " . $frutas[0] . "\n";

    // Array asociativo
    $precios = array("Manzana" => 1.2, "Plátano" => 0.8);
    echo "El precio de la Manzana es: " . $precios["Manzana"] . "\n";
    ?>
    </pre>

    <h3>3.2 Funciones</h3>
    <p>En PHP puedes definir funciones personalizadas para realizar tareas específicas. Ejemplo de una función que suma dos números:</p>
    <pre>
    <?php
    // Definir una función personalizada para sumar dos números
    function sumar($num1, $num2) {
        return $num1 + $num2;
    }

    // Usar la función sumar
    $resultado = sumar(5, 10);
    echo "La suma de 5 y 10 es: $resultado";
    ?>
    </pre>

    <h3>3.3 Funciones Predefinidas</h3>
    <p>PHP cuenta con una gran cantidad de funciones predefinidas. Por ejemplo, la función <code>strlen</code> cuenta el número de caracteres en una cadena:</p>
    <pre>
    <?php
    // Usar la función strlen para contar caracteres
    $cadena = "Hola, mundo";
    echo "La longitud de la cadena 'Hola, mundo' es: " . strlen($cadena);
    ?>
    </pre>
</div>

</body>
</html>
