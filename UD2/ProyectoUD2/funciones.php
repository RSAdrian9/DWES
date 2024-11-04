<?php
function aplicarDescuento($precio, $descuento) {
    return $precio - ($precio * ($descuento / 100));
}
?>
