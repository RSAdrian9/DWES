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

    <?php include __DIR__ . '/shared/navbar.php'; ?>


    <main class="category-page">
        <h1>Categorías de Juegos</h1>
        <p>Selecciona una categoría para explorar juegos por género o consola.</p>

        <div class="category-container">
            <!-- Sección de Géneros -->
            <section class="genres-section">
                <h2>Géneros</h2>
                <div class="genres-grid">
                    <?php foreach ($genres as $genre) : ?>
                        <div class="category-card">
                            <h3><?php echo $genre['title']; ?></h3>
                            <p><?php echo $genre['description']; ?></p>
                            <a href="index.php?page=categories&action=gamesByCategory&categoria=<?= urlencode($genre['title']) ?>" class="btn-category">
                                Explorar <?= htmlspecialchars($genre['title']) ?>
                            </a>

                        </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Sección de Consolas -->
            <section class="consoles-section">
                <h2>Consolas</h2>
                <div class="consoles-grid">
                    <?php foreach ($consoles as $console) : ?>
                        <div class="category-card">
                            <h3><?php echo $console['title']; ?></h3>
                            <p><?php echo $console['description']; ?></p>
                            <a href="index.php?page=categories&action=gamesByCategory&categoria=<?= urlencode($console['title']) ?>" class="btn-category">
                                Explorar <?= htmlspecialchars($console['title']) ?>
                            </a>

                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </main>

    <?php include __DIR__ . '/shared/footer.php'; ?>
</body>

</html>