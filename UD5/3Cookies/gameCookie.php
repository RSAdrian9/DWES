<?php
// Guardar el puntaje del jugador en una cookie válida por 1 día
setcookie("puntaje_jugador", "1500", time() + 86400, "/");

// Acceder al puntaje
if (isset($_COOKIE['puntaje_jugador'])) {
    echo "Tu puntaje actual es: " . $_COOKIE['puntaje_jugador'];
}



// Modificar el nivel alcanzado por el jugador
setcookie("nivel_jugador", "2", time() + 86400, "/");

// Cambiar el nivel a 3
setcookie("nivel_jugador", "3", time() + 86400, "/");

echo "<br> Has avanzado al nivel: " . $_COOKIE['nivel_jugador'];




// Eliminar la cookie
// Para eliminar la cookie, se establece una fecha de expiración en el pasado
setcookie("puntaje_jugador", "", time() - 3600, "/");

echo "Puntaje reiniciado.";
?>