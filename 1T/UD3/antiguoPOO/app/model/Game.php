<?php
include __DIR__ . '/../includes/functions.php';
include __DIR__ . '/../includes/arrays.php';

$categoriaSeleccionada = $_GET['categoria'] ?? ''; // Obtenemos la categoría de la URL
$filteredGames = [];

// Filtrar juegos según la categoría seleccionada (puede ser "platform" o "genre")
foreach ($games as $game) {
    if ($game['platform'] === $categoriaSeleccionada || $game['genre'] === $categoriaSeleccionada) {
        $filteredGames[] = $game;
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Juegos - <?php echo htmlspecialchars($categoriaSeleccionada); ?></title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/games.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php include __DIR__ . '/../includes/navbar.php'; ?>

    <main class="games-page">
        <h1>Juegos de <?php echo htmlspecialchars($categoriaSeleccionada); ?></h1>

        <?php if (!empty($filteredGames)) : ?>
            <div class="games-grid">
                <?php foreach ($filteredGames as $game) :
                    $descuento = 20;  // Definir un descuento del 10% (puedes hacerlo dinámico si lo deseas)
                    $precioConDescuento = aplicarDescuento($game['price'], $descuento); // Aplicamos el descuento
                ?>
                    <div class="game-card">
                        <img src="<?php echo htmlspecialchars($game['image']); ?>" alt="<?php echo htmlspecialchars($game['title']); ?>">
                        <h3><?php echo htmlspecialchars($game['title']); ?></h3>
                        <p>Género: <?php echo htmlspecialchars($game['genre']); ?></p>
                        <p>Plataforma: <?php echo htmlspecialchars($game['platform']); ?></p>
                        <p>Precio:
                            <span class="original-price">$<?php echo number_format($game['price'], 2); ?></span>
                            <span class="discounted-price">$<?php echo number_format($precioConDescuento, 2); ?></span>
                        </p>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php else : ?>
            <p>No se encontraron juegos en esta categoría.</p>
        <?php endif; ?>
    </main>


    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>