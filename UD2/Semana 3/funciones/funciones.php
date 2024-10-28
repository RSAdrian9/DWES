<?php

// ARGUMENTOS POR valor y por referencia
function precio_iva_referencia (&$precio /* le pasas su dirección de memoria 100325 */, $iva = 21) {
    $precio *= (1 + $iva);  // 10 * 1.21 = 12.1
    // no es necesario usar ningún return
}



$precio = 10;  //100325
    print "<br/><br/>1- ANTES de llamar a la función:  El precio con IVA es ".$precio ;  //10

    precio_iva_referencia($precio);

    print "<br/>2- DESPUES de llamar a la función:  El precio con IVA es ". $precio ;  //121

?>