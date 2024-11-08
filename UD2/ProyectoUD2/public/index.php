<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>PixelGames - Tienda de Videojuegos</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <?php include __DIR__ . '/../includes/navbar.php'; ?>

    <h1>Bienvenido a PixelGames</h1>
    <p><?php echo date("l, d-m-Y H:i"); ?></p>
    <p>En nuestra tienda encontrarás una gran variedad de videojuegos para todas las plataformas.</p>

    <!-- Sección de Juegos en Cuadrícula -->
    <section class="games-grid">
        <h2>Juegos Destacados</h2>
        <div class="grid-container">
            <?php
            $juegos = [
                ["titulo" => "The Legend of Zelda", "plataforma" => "Nintendo Switch", "precio" => 59.99, "imagen" => "assets/images/zelda.jpg"],
                ["titulo" => "God of War", "plataforma" => "PlayStation 5", "precio" => 49.99, "imagen" => "assets/images/godofwar.jpg"],
                ["titulo" => "Halo Infinite", "plataforma" => "Xbox Series X", "precio" => 39.99, "imagen" => "assets/images/halo.jpg"],
                ["titulo" => "Minecraft", "plataforma" => "Multiplataforma", "precio" => 29.99, "imagen" => "assets/images/minecraft.jpg"],
                ["titulo" => "Cyberpunk 2077", "plataforma" => "PC", "precio" => 44.99, "imagen" => "assets/images/cyberpunk.jpg"],
                ["titulo" => "Fortnite", "plataforma" => "Multiplataforma", "precio" => 0.00, "imagen" => "assets/images/fortnite.jpg"]
            ];

            function mostrarJuegos($juegos)
            {
                foreach ($juegos as $juego) {
                    echo '<div class="grid-item">';
                    echo '<img src="' . $juego["imagen"] . '" alt="' . $juego["titulo"] . '">';
                    echo '<h3>' . $juego["titulo"] . '</h3>';
                    echo '<p>Plataforma: ' . $juego["plataforma"] . '</p>';
                    echo '<p>Precio: $' . number_format($juego["precio"], 2) . '</p>';
                    echo '</div>';
                }
            }

            mostrarJuegos($juegos);
            ?>
        </div>
    </section>
</body>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</html>