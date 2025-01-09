<?php
// gettype obtiene el tipo de la variable que se le pasa como parámetro y devuelve una cadena de texto, que puede ser
// php array, boolean, double, integer, object, string, null, resource o unknowntype.

$variable = 18.7;
$variable = 18;
$variable = "Hello World";
$variable = null;
$variable = array(1, 2, 3, 4, 5);
$variable = true;

echo "El tipo de la variable es: " . gettype($variable). "<br>";

echo "<br> VAR_DUMP : " , var_dump($variable);

echo "<br> ¿es un array? : " , is_array($variable);

$salida = is_array($variable);
echo "<br> La salida es boleana : " , is_bool($salida);

//settype

settype($variable, "integer");

echo "<br> El tipo de la variable es: " , gettype($variable);

$a = null;

echo "<br> A es -> " , $a;
settype($a, "string");
echo "<br> A es -> " , $a;



// Desactivar toda las notificaciónes del PHP

//error_reporting(0);

 
// Notificar solamente errores de ejecución

//error_reporting(E_ERROR | E_WARNING | E_PARSE);


//error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);


// Mostrar todos los errores menos el E_NOTICE

// Valor predeterminado ya descrito en php.ini

//error_reporting(E_ALL ^ E_NOTICE);


//Notificar todos los errores de PHP

//error_reporting(E_ALL);


// Notificar todos los errores de PHP
//error_reporting(-1);

 

// Lo mismo que error_reporting(E_ALL);

//ini_set('error_reporting', E_ALL);

?>