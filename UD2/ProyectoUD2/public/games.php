<?php
include __DIR__ . '/../includes/funciones.php';
$productos = [
    ["nombre" => "Juego 1", "precio" => 50, "plataforma" => "PC"],
    ["nombre" => "Juego 2", "precio" => 60, "plataforma" => "PS4"],
    ["nombre" => "Juego 3", "precio" => 40, "plataforma" => "Xbox"]
];
?>

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
    <h1>Lista de Videojuegos</h1>
    <ul>
        <?php foreach ($productos as $producto): ?>
            <li class="list-games">
                <?php
                $precioConDescuento = aplicarDescuento($producto["precio"], 10);
                echo "{$producto['nombre']} - {$producto['plataforma']} - Precio: $precioConDescuento €";
                ?>
            </li>
        <?php endforeach; ?>
    </ul>
    <?php include __DIR__ . '/../includes/footer.php'; ?>
</body>

</html>