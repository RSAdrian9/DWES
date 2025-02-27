<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>PixelGames - Tienda de Videojuegos</title>
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/contact.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    </head>
<body>
    <h1>Contacto</h1>
    <form action="process_contact_form.php" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>
        
        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required></textarea><br>
    
        <input type="submit" value="Enviar">
    </form>
    <button class="back-button" onclick="window.location.href='index.php'">Volver</button>
</body>
</html>
