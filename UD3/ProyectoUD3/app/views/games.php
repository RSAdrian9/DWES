<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>PixelGames - Tienda de Videojuegos</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/games.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <?php include __DIR__ . '/shared/navbar.php'; ?>

    <h1>Juegos de <?php echo htmlspecialchars($categoria); ?></h1>
    <?php if (!empty($games)): ?>
        <div class="games-grid">
            <?php foreach ($games as $game): ?>
                <div class="game-card">
                    <img src="<?= htmlspecialchars($game['image']) ?>"
                        alt="<?= htmlspecialchars($game['title']) ?>">
                    <h2><?= htmlspecialchars($game['title']) ?></h2>
                    <p>Plataforma: <?= htmlspecialchars($game['platform']) ?></p>
                    <p>Género: <?= htmlspecialchars($game['genre']) ?></p>
                    <p>Precio:
                        <?php if ($game['price'] == 0): ?>
                            <span>Gratis</span>
                        <?php else: ?>
                            $<?= number_format($game['price'], 2) ?>
                        <?php endif; ?>
                    </p>
                </div>
            <?php endforeach; ?>

        </div>
    <?php else: ?>
        <p>No hay juegos disponibles en este momento.</p>
    <?php endif; ?>

    <?php include __DIR__ . '/shared/footer.php'; ?>
</body>

</html>