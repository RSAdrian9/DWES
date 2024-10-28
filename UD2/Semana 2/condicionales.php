<?php

$persona1 = 10;
$persona2 = 20;

if ($persona1 > $persona2) {
    echo "La persona 1 es mayor que la persona 2<br>";
} elseif ($persona1 < $persona2) {
    echo "La persona 2 es mayor que la persona 1 <br>";
} else {
    echo "Las dos personas tienen la misma edad <br>";
}

// Operador ternario

/* Sintáxis básica del Operador Ternario:
La sintáxis básica de un operador ternario es la siguiente:

(condicion) ? valor_si_verdadero : valor_si_falso
*/
echo ($persona1 > $persona2) ? "<br>La persona 1 es mayor que la persona 2" : "La persona 2 es mayor que la persona 1";

$interruptor = true;
echo ($interruptor) ? "<br>El interruptor está encendido" : "El interruptor está apagado";


// Operador ternario anidado - NO VALIDO desde la versión 7.4 de PHP
echo ($persona1 > $persona2) ? "<br>La persona 1 es mayor que la persona 2" : 
(($persona1 < $persona2) ? "<br>La persona 2 es mayor que la persona 1" : "Las dos personas tienen la misma edad");
// La persona 2 es mayor que la persona 1

// switch
$dia = "Lunes";

switch ($dia) {
    case 'Lunes':
        echo "<br>Hoy es Lunes";
        break;
    case 'Martes':
        echo "Hoy es Martes";
        break;
    case 'Miércoles':
        echo "Hoy es Miércoles";
        break;
    case 'Jueves':
        echo "Hoy es Jueves";
        break;
    case 'Viernes':
        echo "Hoy es Viernes";
        break;
    case 'Sábado':
        echo "Hoy es Sábado";
        break;
    case 'Domingo':
        echo "Hoy es Domingo";
        break;
    default:
        echo "No es un día de la semana";
        break;
}

// MATCH
// A diferencia de switch, la comparación es una comprobación de identidad (===) en lugar de una comparación de igualdad (==).
// Identidad es cuando tiene mismo valor y tipo de dato.
// En lugar de una comprobación de igualdad débil (==), solo cuando tienen el mismo valor.



$age = 20;

$output = match ($age) {
    0 => "Aún no naces",
    1, 2, 3, 4, 5 => "Eres un niño",
    6, 7, 8, 9, 10 => "Eres un niño",
    11, 12, 13, 14, 15, 16, 17, 18 => "Eres un adolescente",
    19, 20, 21, 22, 23, 24, 25 => "Eres un joven",
    default => "Eres un adulto",
};

var_dump($output);

$dia = "Lunes";

$output = match ($dia) {
    'Lunes' => "Hoy es Lunes <br>",
    'Martes' => "Hoy es Martes <br>",
    'Miércoles' => "Hoy es Miércoles <br>",
    'Jueves' => "Hoy es Jueves <br>",
    'Viernes' => "Hoy es Viernes <br>",
    'Sábado' => "Hoy es Sábado <br>",
    'Domingo' => "Hoy es Domingo <br>",
    default => "No es un día de la semana <br>",
};

var_dump($output);


$comida = "Pizza";

$output = match ($comida) {
    'Pizza', 'Hamburguesa', 'Hot Dog' => "Comida rápida",
    'Ensalada', 'Sopa', 'Pescado' => "Comida saludable",
    default => "No es una comida conocida",
};

var_dump($output);


?>