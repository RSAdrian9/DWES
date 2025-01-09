<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>PixelGames - Tienda de Videojuegos</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <?php include __DIR__ . '/shared/navbar.php'; ?>


    <main>
        <section class="hero">
            <h1>Bienvenido a PixelGames 🎮</h1>
            <p><?php echo date("l, d-m-Y H:i"); ?></p>
            <p id="titleHome">En nuestra tienda encontrarás una gran variedad de videojuegos para todas las plataformas.</p>
        </section>

        <section class="games-grid">
            <h2>Juegos destacados</h2>
            <div class="grid-container">
                <?php if (!empty($games)): ?>
                    <?php foreach ($games as $game): ?>
                        <div class="grid-item">
                            <img src="<?= $game['image']; ?>" alt="<?= $game['title']; ?>">
                            <h3><?= $game['title']; ?></h3>
                            <p><?= 'Plataforma: ' . $game["platform"] ?></p>
                            <p><?= 'Precio: ' . number_format($game["price"], 2) . ' €' ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay juegos disponibles en este momento.</p>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <?php include __DIR__ . '/shared/footer.php'; ?>
</body>

</html>