<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Agregar Producto</title>
</head>
<body>
    <h1>Agregar Nuevo Producto</h1>
    <form action="" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required><br>

        <label for="categoria">Categoría:</label>
        <select name="categoria" id="categoria" required>
            <?php foreach ($this->categorias as $categoria): ?>
                <option value="<?= $categoria ?>"><?= $categoria ?></option>
            <?php endforeach; ?>
        </select><br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.1" id="precio" name="precio" required><br>

        <label for="stock">Stock:</label>
        <input type="number" id="stock" name="stock" required><br>

        <button type="submit">Guardar</button>
        <a href="index.php">Cancelar</a>
    </form>

    <br><a href="../public/index.php" class="goHome">Volver al menú principal</a>
</body>
</html>
