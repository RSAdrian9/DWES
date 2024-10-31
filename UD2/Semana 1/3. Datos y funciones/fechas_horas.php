<?php

// establece la zona horaria
date_default_timezone_set('America/Toronto');

$fecha="2024-10-01";

// echo date_format ($date, 'Y-m-d H:i:s');
// Si quieres otra fecha, hay que convertir la cadena a una fecha con strtotime
echo "<br> 3" . date ("D-Y-m-d", strtotime($fecha));

//Define varias constantes de varios tipos.

define ("PT", 3.1416);

define ("F", 2.7);

define ("GRAVEDAD", 9.81);


echo"El valor de PI es: ". " PI "." <br>";

echo"Il valor de Ces: ". "E" ."<br>";

define ("Fecha_Actual", date("d/m/Y"));
define ("Hora_Actual", date("H:i:s"));
echo"La fecha actual es: ".Fecha_Actual. " <br>";
echo"La hora actual es: ".Hora_Actual. " <br>";



?>