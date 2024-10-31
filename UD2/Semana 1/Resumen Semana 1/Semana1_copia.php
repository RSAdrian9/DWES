<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resumen Semana 1 PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            padding: 20px;
        }
        h1, h2 {
            color: #007BFF;
        }
        p {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
        }
        .code {
            background-color: #f0f0f0;
            padding: 15px;
            border-radius: 5px;
            font-family: "Courier New", Courier, monospace;
            overflow-x: auto;
        }
        .result {
            background-color: #ddd;
            padding: 10px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>Resumen Semana 1 PHP</h1>

    <h2>1. Introducción a PHP</h2>
    <p>Ejemplo básico de "Hola Mundo" en PHP:</p>
    <div class="code">
        <pre><code>
&lt;?php
    echo "Hola Mundo, esto es PHP.";
?&gt;
        </code></pre>
    </div>
    <div class="result">
        <?php echo "Hola Mundo, esto es PHP."; ?>
    </div>

    <h2>2. Comentarios en PHP</h2>
    <p>Ejemplo de comentarios en PHP:</p>
    <div class="code">
        <pre><code>
&lt;?php
    // Este es un comentario de una línea
    /* Este es un comentario
       de múltiples líneas */
?&gt;
        </code></pre>
    </div>
    <p>Los comentarios no producen salida en el navegador.</p>

    <h2>3. Variables y Tipos de Datos</h2>
    <p>Ejemplo de declaración de variables y tipos de datos:</p>
    <div class="code">
        <pre><code>
&lt;?php
    $jueves = "jueves";  // Cadena de caracteres
    $dia_mes = 14;       // Entero
    $precio = 19.99;     // Flotante
    $descuento = true;   // Booleano
    $colores = array("rojo", 12, "verde", "azul"); // Arreglo
?&gt;
        </code></pre>
    </div>
    <div class="result">
        <?php
        $jueves = "jueves";  
        $dia_mes = 14;       
        $precio = 19.99;     
        $descuento = true;   
        $colores = array("rojo", 12, "verde", "azul");

        echo "<p>Día: " . $jueves . " del mes: " . $dia_mes . "</p>";
        echo "<p>Precio: " . $precio . " - Descuento: " . ($descuento ? 'Sí' : 'No') . "</p>";
        echo "<p>Color favorito: " . $colores[2] . "</p>";
        ?>
    </div>

    <h2>4. Concatenación de Variables</h2>
    <p>Ejemplo de concatenación de variables en PHP:</p>
    <div class="code">
        <pre><code>
&lt;?php
    echo "Hoy es " . $jueves . " " . $dia_mes;
?&gt;
        </code></pre>
    </div>
    <div class="result">
        <?php
        echo "Hoy es " . $jueves . " " . $dia_mes;
        ?>
    </div>

    <h2>5. Clases y Objetos</h2>
    <p>Ejemplo de creación de una clase y un objeto en PHP:</p>
    <div class="code">
        <pre><code>
&lt;?php
    class Persona {
        public $nombre;
        public function __construct($nombre) {
            $this->nombre = $nombre;
        }
    }

    $miPersona = new Persona("Javier");
    echo $miPersona->nombre;
?&gt;
        </code></pre>
    </div>
    <div class="result">
        <?php
        class Persona {
            public $nombre;
            public function __construct($nombre) {
                $this->nombre = $nombre;
            }
        }

        $miPersona = new Persona("Javier");
        echo "<p>El nombre de la persona es: " . $miPersona->nombre . "</p>";
        ?>
    </div>

    <h2>6. Ámbito de Variables</h2>
    <p>Ejemplo de variables globales y locales en PHP:</p>
    <div class="code">
        <pre><code>
&lt;?php
    $x = 10;  // Variable global

    function miFuncion() {
        global $x; // Accede a la variable global $x
        $y = 5;   // Variable local
        echo "Valor de x: $x"; // Imprime 10
        echo "Valor de y: $y"; // Imprime 5
    }

    miFuncion();
?&gt;
        </code></pre>
    </div>
    <div class="result">
        <?php
        $x = 10;  // Variable global

        function miFuncion() {
            global $x; // Accede a la variable global $x
            $y = 5;   // Variable local
            echo "<p>Valor de x: $x</p>"; // Imprime 10
            echo "<p>Valor de y: $y</p>"; // Imprime 5
        }

        miFuncion();
        ?>
    </div>

    <h2>7. Funciones con Variables Estáticas</h2>
    <p>Ejemplo de uso de variables estáticas en funciones:</p>
    <div class="code">
        <pre><code>
&lt;?php
    function contador() {
        static $contador = 0; // Persiste su valor
        $contador++;
        echo "Contador: $contador";
    }

    contador(); // Imprime: 1
    contador(); // Imprime: 2
    contador(); // Imprime: 3
?&gt;
        </code></pre>
    </div>
    <div class="result">
        <?php
        function contador() {
            static $contador = 0; // Persiste su valor
            $contador++;
            echo "<p>Contador: $contador</p>";
        }

        contador(); // Imprime: 1
        contador(); // Imprime: 2
        contador(); // Imprime: 3
        ?>
    </div>

    <h2>8. Conversión de Tipos</h2>
    <p>Ejemplo de conversión automática de tipos en PHP:</p>
    <div class="code">
        <pre><code>
&lt;?php
    $foo2 = "5"; // Cadena
    $foo2 = 5 + "10 cerditos pequeñitos"; // PHP convierte la cadena automáticamente
    echo "Resultado de la conversión: $foo2";

    $bar = 3.36;
    $foo3 = (int)$bar; // Conversión forzada a entero
    echo "Conversión forzada: $foo3";
?&gt;
        </code></pre>
    </div>
    <div class="result">
        <?php
        $foo2 = "5"; // Cadena
        $foo2 = 5 + "10 cerditos pequeñitos"; // PHP convierte la cadena automáticamente
        echo "<p>Resultado de la conversión: $foo2</p>";

        $bar = 3.36;
        $foo3 = (int)$bar; // Conversión forzada a entero
        echo "<p>Conversión forzada: $foo3</p>";
        ?>
    </div>

    <!-- SECCIÓN 9: Uso de echo y print -->
    <h2>9. Uso de echo y print</h2>
    <p>Ejemplos básicos de las funciones <code>echo</code> y <code>print</code>:</p>
    <div class="code">
        <pre><code>
&lt;?php
    echo "&lt;p&gt;Hola, " . "mundo!&lt;/p&gt;";
    echo "&lt;p&gt;Hola, " , "mundo!&lt;/p&gt;";

    print "&lt;p&gt;Hola, mundo!&lt;/p&gt;\n";
?&gt;
        </code></pre>
    </div>
    <div class="result">
        <?php
        echo "<p>Hola, " . "mundo!</p>";
        echo "<p>Hola, " , "mundo!</p>";
        print "<p>Hola, mundo!</p>\n";
        ?>
    </div>

    <!-- SECCIÓN 10: Concatenación y uso de variables -->
    <h2>10. Concatenación y uso de variables</h2>
    <p>Concatenación de cadenas y uso de variables:</p>
    <div class="code">
        <pre><code>
&lt;?php
    $nombre = "Adrian";
    print "&lt;p&gt;Hola, " . $nombre . "!&lt;/p&gt;";
    echo "Hola, " , $nombre , $nombre, "adios!"; 
    echo ("Hola, " . $nombre . $nombre . "adios!");
?&gt;
        </code></pre>
    </div>
    <div class="result">
        <?php
        $nombre = "Adrian";
        print "<p>Hola, " . $nombre . "!</p>";
        echo "Hola, " , $nombre , $nombre, "adios!"; 
        echo ("<p>Hola, " . $nombre . $nombre . " adios!</p>");
        ?>
    </div>

    <!-- SECCIÓN 11: Operaciones aritméticas con echo y print -->
    <h2>11. Operaciones aritméticas con echo y print</h2>
    <p>Ejemplo de operaciones aritméticas:</p>
    <div class="code">
        <pre><code>
&lt;?php
    print 10 + 20;
?&gt;
        </code></pre>
    </div>
    <div class="result">
        <?php
        print 10 + 20;
        ?>
    </div>

    <!-- SECCIÓN 12: Uso de comillas -->
    <h2>12. Uso de comillas en cadenas</h2>
    <p>Ejemplo de uso de comillas simples y dobles en una cadena:</p>
    <div class="code">
        <pre><code>
&lt;?php
    echo "&lt;p&gt;Este es un 'ejemplo' con comillas dobles y simples.&lt;/p&gt;";
?&gt;
        </code></pre>
    </div>
    <div class="result">
        <?php
        echo "<p>Este es un 'ejemplo' con comillas dobles y simples.</p>";
        ?>
    </div>

    <!-- SECCIÓN 13: Función printf -->
    <h2>13. Uso de la función printf</h2>
    <p>Ejemplos del uso de <code>printf</code> para formatear cadenas:</p>
    <div class="code">
        <pre><code>
&lt;?php
    $ciclo = "DAW";
    $modulo = "DWES";
    printf("%s es un módulo de %d curso de %s", $modulo, 2, $ciclo);

    printf("Número flotante con 2 decimales: %.2f\n", 3.14159);
    printf("Número flotante con formato avanzado: %.010.2f\n", 3.14159);

    printf("Esto es un porcentaje: 100%%\n");
?&gt;
        </code></pre>
    </div>
    <div class="result">
        <?php
        $ciclo = "DAW";
        $modulo = "DWES";
        echo "<p>";
        printf("%s es un módulo de %d curso de %s", $modulo, 2, $ciclo);
        echo "</p>";

        printf("<p>Número flotante con 2 decimales: %.2f</p>\n", 3.14159);
        printf("<p>Número flotante con formato avanzado: %.010.2f</p>\n", 3.14159);

        printf("<p>Esto es un porcentaje: 100%%</p>\n");
        ?>
    </div>

    <h1>Tipos de Datos en PHP</h1>

<!-- SECCIÓN 14: Uso de gettype() -->
<h2>14. Uso de gettype()</h2>
<p>El método <code>gettype()</code> devuelve el tipo de la variable:</p>
<div class="code">
    <pre><code>
&lt;?php
$variable = 18.7;
$variable = 18;
$variable = "Hello World";
$variable = null;
$variable = array(1, 2, 3, 4, 5);
$variable = true;

echo "El tipo de la variable es: " . gettype($variable). "&lt;br&gt;";
?&gt;
    </code></pre>
</div>
<div class="result">
    <?php
    $variable = 18.7;
    $variable = 18;
    $variable = "Hello World";
    $variable = null;
    $variable = array(1, 2, 3, 4, 5);
    $variable = true;

    echo "El tipo de la variable es: " . gettype($variable). "<br>";
    ?>
</div>

<!-- SECCIÓN 15: Uso de var_dump() -->
<h2>15. Uso de var_dump()</h2>
<p><code>var_dump()</code> muestra información detallada sobre el tipo y valor de una variable:</p>
<div class="code">
    <pre><code>
&lt;?php
echo "&lt;br&gt; VAR_DUMP : " , var_dump($variable);
?&gt;
    </code></pre>
</div>
<div class="result">
    <?php
    echo "<br> VAR_DUMP : " , var_dump($variable);
    ?>
</div>

<!-- SECCIÓN 16: Comprobaciones con is_array() y is_bool() -->
<h2>16. Comprobaciones con is_array() e is_bool()</h2>
<p>Uso de las funciones <code>is_array()</code> e <code>is_bool()</code> para verificar el tipo de datos:</p>
<div class="code">
    <pre><code>
&lt;?php
echo "&lt;br&gt; ¿Es un array? : " , is_array($variable);
$salida = is_array($variable);
echo "&lt;br&gt; La salida es boleana : " , is_bool($salida);
?&gt;
    </code></pre>
</div>
<div class="result">
    <?php
    echo "<br> ¿Es un array? : " , is_array($variable);
    $salida = is_array($variable);
    echo "<br> La salida es booleana : " , is_bool($salida);
    ?>
</div>

<!-- SECCIÓN 17: Conversión de tipos con settype() -->
<h2>17. Conversión de tipos con settype()</h2>
<p>El método <code>settype()</code> cambia el tipo de una variable:</p>
<div class="code">
    <pre><code>
&lt;?php
settype($variable, "integer");
echo "&lt;br&gt; El tipo de la variable es: " , gettype($variable);

$a = null;
echo "&lt;br&gt; A es -> " , $a;
settype($a, "string");
echo "&lt;br&gt; A es -> " , $a;
?&gt;
    </code></pre>
</div>
<div class="result">
    <?php
    settype($variable, "integer");
    echo "<br> El tipo de la variable es: " , gettype($variable);

    $a = null;
    echo "<br> A es -> " , $a;
    settype($a, "string");
    echo "<br> A es -> " , $a;
    ?>
</div>

<!-- SECCIÓN 18: Control de errores con error_reporting() -->
<h2>18. Control de errores con error_reporting()</h2>
<p><code>error_reporting()</code> permite controlar qué errores notifica PHP. Algunos ejemplos:</p>
<div class="code">
    <pre><code>
// Desactivar todas las notificaciónes del PHP
//error_reporting(0);

// Notificar solamente errores de ejecución
//error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Mostrar todos los errores menos el E_NOTICE
//error_reporting(E_ALL ^ E_NOTICE);

// Notificar todos los errores de PHP
//error_reporting(E_ALL);

// Lo mismo que error_reporting(E_ALL);
//ini_set('error_reporting', E_ALL);
    </code></pre>
</div>
<p>En estos ejemplos, se muestran diferentes configuraciones para la función <code>error_reporting()</code>, desde desactivar todas las notificaciones de errores hasta mostrar todos los errores posibles.</p>


</body>
</html>
