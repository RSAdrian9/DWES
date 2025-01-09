<?php
require_once __DIR__ . '/../app/controllers/AuthController.php';

$auth = new AuthController();
$error = $auth->login(); // Ejecuta la lógica del inicio de sesión (si el formulario se envía)
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!--<link rel="stylesheet" href="/public/assets/css/styles.css">-->
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <h2>Iniciar sesión</h2>
    <?php if (!empty($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form method="post">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required>
        <br>
        <label>
            <input type="checkbox" name="recordar"> Recordarme
        </label>
        <br>
        <input type="submit" value="Iniciar sesión">
    </form>
</body>
</html>
