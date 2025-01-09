<?php
require_once __DIR__ . '/../app/controllers/AuthController.php';

$auth = new AuthController();

// Si el botón de cerrar sesión es presionado
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['logout'])) {
    $auth->logout(); // Cierra la sesión
    header('Location: login.php'); // Redirige al login después del logout
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>¡Hasta pronto!</title>
</head>
<body>
    <h1>Hasta pronto, ¡nos volveremos a ver!</h1>
    <form method="post">
        <!-- Botón para cerrar sesión -->
        <button type="submit" name="logout">Cerrar sesión</button>
    </form>
    <button onclick="location.href='login.php'">Iniciar sesión</button>
</body>
</html>
