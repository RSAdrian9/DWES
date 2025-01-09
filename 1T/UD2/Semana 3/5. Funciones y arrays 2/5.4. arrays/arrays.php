<?php

    print "<h2> UD2. ARRAYS. </h2>";

    //*print_r($_SERVER); // Array asociativo con la información del servidor y del entorno de ejecución
    print "<br>
    Un array es un tipo de datos que nos permite almacenar varios valores. 
    Cada miembro del array se almacena en una posición a la que se hace referencia utilizando un valor clave. Las claves pueden ser numéricas o asociativas. ";
    print "<br> Array asociativo y sus dos formas de crearlo: <br>";
    $persona = array("nombre" => "Juan", "edad" => 30); // clave => valor


    // a partir de PHP 5.4
    $alumno = ["nombre" => "Juan", "edad" => 30];

    print "<br> Array persona: ";
    print_r($persona);

    print "<br> Array alumno: ";
    print_r($alumno);

    print "<br><h2> Array númerico y sus tres formas de crearlo </h2><br>";
    // array numérico
    $modulos = array("DWES", "DWEC", "DIW", "DAW");
    $alumnos1 = array("Juan", "Ana", "Luis", "María");
    $alumnos2 = ["Juan", "Ana", "Luis", "María"]; // más usado

    print "<br> Array modulos: ";
    print_r($modulos);
    print "<br> Array alumnos1: ";
    print_r($alumnos1);
    print "<br> Array alumnos2: ";
    print_r($alumnos2);

    print "<br> El alumno 2 es " . $alumnos1[1];
    print "<br> El alumno 2 es " . $alumnos1[1];

    print "<br><h3> Cadenas o variables de texto tratadas como arrays </h3><br>";
    print "<br> print de la variable TEXTO para ver que las cadenas se pueden tratar como arrays: <br>";
    $texto = "Hola";
    print $texto[0];
    print "<br> ELEMENTO CADENA DE TEXTO hola [3]: " . $texto;


    // array bidimensional
    print "<h2>UD2. ARRAYS BIDIMENSIONALES O MULTIDIMENSIONALES</h2>";
    $ciclos = array(
        "DAW" => array ("PR" => "Programación", "BD" => "Bases de datos", "DWES" => "Desarrollo web en entorno servidor"),
        "DAM" => array ("PR" => "Programación", "BD" => "Bases de datos", "PMDM" => "Programación multimedia y de dispositivos móviles")
    );

    print "<br/> Array ciclos: ";
    print_r ($ciclos);

    print "<br/> FILA DAW DEL ARRAY CICLOS <br/>";
    print_r($ciclos["DAW"]);

    print "<br/> ELEMENTO PR DE LA FILA DAW DEL ARRAY CICLOS  <br/>";
    print_r($ciclos["DAW"]["PR"]);


    $deportes = array(
        "Baloncesto" => array("Real Madrid", "Barcelona", "Valencia"),
        "Fútbol" => array("Real Madrid", "Barcelona", "Valencia")
    );

    $deportes2 = [
        "Baloncesto" => ["Real Madrid", "Barcelona", "Valencia"],
        "Fútbol" => ["Real Madrid", "Barcelona", "Valencia"]
    ];

    print "<br/> Asociativo (clave valor): <br/>"; //Asociativo (clave valor)
    print_r($deportes);
    print "<br/> Númerico: <br/>";
    print_r($deportes2);

    print "<br/><h2>UD2. Arrays sin especificar tamaño</h2> <br/>";

    $cena_navidad[] = "Carlos";
    $cena_navidad[] = "Sergio";
    $cena_navidad[] = "Alex";
    print_r($cena_navidad);

    print "<br/><h2>UD2. ARRAYS. Recorrer arrays</h2> <br/>";

    // Foreach

    print "<br/> FOREACH: <br/>";
    //$mdoulos = array("DWES", "DWEC", "DIW", "DAW");
    foreach ($cena_navidad as $invitado) {
        print "<br/> Invitado: " . $invitado . "<br/>";
    }

    foreach ($cena_navidad as $clave => $invitado) {
        print "<br/> El invitado número " . $clave . " es " . $invitado . "<br/>";
    }

    // ANEXO FOREACH con clave valor <br />";
    print "<h2>FOREACH con clave valor de la variable SERVER </h2>";
    
    /*
    foreach ($_SERVER as $clave => $valor) 
    {
        print "<br/>";
        print "<tr/>";
            print "<td> Clave: ".$clave."</td> --------- Valor: ";
            print "<td>".$valor."</td>";
        print "</tr>";

    }
    */

    echo "<br/><h2> Recorrer arrays con current, reset... </h2><br />";

    $musica = array("Rock", "Pop", "Jazz", "Clásica");
    print "<br/> Array música: ";
    print_r($musica);

    echo "<br/><b> Recorriendo con while NEXT: </b>";
    while ($genero = current($musica)) {
        print "<br/> Género: " . $genero;
        next($musica);
    }

    echo "<br><br /> <b> Recorrerlo uno a uno </b>";

    print "<br/>Reinicio el puntero con reset: ".reset($musica) ;
    print "<br/>La clave de la posición actual del array es: ". key($musica) ;
    print "<br/>El elemento del array música es ".current($musica) ;
    next($musica);
    next($musica);
    print "<br/>El elemento del array música es ".current($musica) ; // estamos en la tercera posición
    prev($musica);
    print "<br/>El elemento del array música es ".current($musica) ; // estamos en la segunda posición
    end($musica);
    print "<br/>El elemento del array música es ".current($musica) ; // estamos en la última posición

    echo "<br/><h2>Funciones importantes para tratas arrays</h2><br />";

    // Eliminamos un elemento del array musica
    print "<br/> Eliminamos un elemento del array deportes: ";
    unset($musica[2]);

    unset($musica[0]);

    print_r($musica);

    print "<br/> Búsqueda con in_array: <br/>";

    $para_buscar = "Pop";
    if (in_array($para_buscar, $musica)) {
        print "<br/> El elemento " . $para_buscar . " está en el array música";
    } else {
        print "<br/> El elemento " . $para_buscar . " NO está en el array música";
    }

    $para_buscar = 0;
    if (in_array($para_buscar, $musica)) {
        print "<br/> El elemento " . $para_buscar . " está en el array música";
    } else {
        print "<br/> El elemento " . $para_buscar . " NO está en el array música";
    }

?>