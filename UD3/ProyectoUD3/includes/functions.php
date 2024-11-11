<?php

// Función para mostrar los juegos en la cuadrícula
function mostrarJuegos($gamesHome)
{
    foreach ($gamesHome as $game) {
        echo '<div class="grid-item">';
        echo '<img src="' . $game["image"] . '" alt="' . $game["title"] . '">';
        echo '<h3>' . $game["title"] . '</h3>';
        echo '<p>Plataforma: ' . $game["platform"] . '</p>';
        echo '<p>Precio: $' . number_format($game["price"], 2) . '</p>';
        echo '</div>';
    }
}

// Función para aplicar un descuento a un precio
function aplicarDescuento($precio, $descuento)
{
    return $precio - ($precio * ($descuento / 100));
}

// Función para buscar juegos por título
function buscarJuegos($games, $termino)
{
    $resultados = [];
    foreach ($games as $game) {
        if (stripos($game['title'], $termino) !== false) { // Busca por título
            $resultados[] = $game;
        }
    }
    return $resultados;
}

?>