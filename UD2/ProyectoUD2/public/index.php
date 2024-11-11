<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>PixelGames - Tienda de Videojuegos</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <?php 
    include __DIR__ . '/../includes/navbar.php'; 
    include __DIR__ . '/../includes/arrays.php';
    ?>

    <h1>Bienvenido a PixelGames</h1>
    <p><?php echo date("l, d-m-Y H:i"); ?></p>
    <p>En nuestra tienda encontrarás una gran variedad de videojuegos para todas las plataformas.</p>

    <!-- Sección de Juegos en Cuadrícula -->
    <section class="games-grid">
        <h2>Juegos Destacados</h2>
        <div class="grid-container">
            <?php

            function mostrarJuegos($games)
            {
                foreach ($games as $game) {
                    echo '<div class="grid-item">';
                    echo '<img src="' . $game["imagen"] . '" alt="' . $game["titulo"] . '">';
                    echo '<h3>' . $game["titulo"] . '</h3>';
                    echo '<p>Plataforma: ' . $game["plataforma"] . '</p>';
                    echo '<p>Precio: $' . number_format($game["precio"], 2) . '</p>';
                    echo '</div>';
                }
            }

            mostrarJuegos($games);
            ?>
        </div>
    </section>
</body>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</html>