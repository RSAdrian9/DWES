<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>PixelGames - Tienda de Videojuegos</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/categories.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php
    include __DIR__ . '/../includes/navbar.php';
    include __DIR__ . '/../includes/arrays.php';
    ?>

    <main class="category-page">
        <h1>Categorías de Juegos</h1>
        <p>Selecciona una categoría para explorar juegos por género o consola.</p>

        <div class="category-container">
            <!-- Bloque de Géneros -->
            <section class="genres-section">
                <h2>Géneros</h2>
                <div class="genres-grid">
                    <?php foreach ($genres as $genre) : ?>
                        <div class="category-card">
                            <h3><?php echo $genre['title']; ?></h3>
                            <a href="games.php?categoria=<?php echo urlencode($genre['title']); ?>" class="btn-category">Explorar <?php echo $genre['title']; ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Bloque de Consolas -->
            <section class="consoles-section">
                <h2>Consolas</h2>
                <div class="consoles-grid">
                    <?php foreach ($consoles as $console) : ?>
                        <div class="category-card">
                            <h3><?php echo $console['title']; ?></h3>
                            <a href="games.php?categoria=<?php echo urlencode($console['title']); ?>" class="btn-category">Explorar <?php echo $console['title']; ?></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </main>

    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>