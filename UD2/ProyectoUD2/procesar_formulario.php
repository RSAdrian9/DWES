<?php
if (isset($_POST['nombre'], $_POST['email'], $_POST['mensaje'])) {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];
    
    echo "<h1>Gracias, $nombre</h1>";
    echo "<p>Hemos recibido tu mensaje</p>";
    echo "<p>Nos pondremos en contacto contigo mediante el correo: $email</p>";
} else {
    echo "Por favor, completa todos los campos.";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>PixelGames - Tienda de Videojuegos</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>footer { position: fixed; }</style>

<body>
    <?php include 'navbar/navbar.php'; ?>
    <?php include 'footer/footer.php'; ?>
</body>
</html>
