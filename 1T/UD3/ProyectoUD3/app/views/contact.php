<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>PixelGames - Tienda de Videojuegos</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/contact.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<style>footer {position: fixed;}</style>

<body>

    <?php include __DIR__ . '/shared/navbar.php'; ?>

    <h1>Contacto</h1>

    <!-- Mostrar mensaje de éxito si se envió el formulario correctamente -->
    <?php if (isset($message)): ?>
        <div class="success-message">
            <p><?php echo htmlspecialchars($message); ?></p>
        </div>
    <?php endif; ?>

    <!-- Mostrar errores de validación si los hay -->
    <?php if (!empty($errors)): ?>
        <div class="error-messages">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="index.php?page=contact" method="post" onsubmit="return validarFormulario()">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($nombre ?? ''); ?>" required><br>

        <label for="email">Correo:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>" required><br>

        <label for="mensaje">Mensaje:</label>
        <textarea id="mensaje" name="mensaje" required><?php echo htmlspecialchars($mensaje ?? ''); ?></textarea><br>

        <input type="submit" value="Enviar">
    </form>

    <button class="back-button" onclick="window.location.href='index.php'">Volver</button>


    <?php include __DIR__ . '/shared/footer.php'; ?>
</body>

<script src="assets/js/validateformcontact.js"></script>

</html>