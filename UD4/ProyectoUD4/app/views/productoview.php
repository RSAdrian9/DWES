<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Gestión de Productos</title>
</head>

<body>
    <h1>Gestión de Productos</h1>

    <form method="POST" action="index.php?action=crear">
        <input type="hidden" name="id" value="<?= isset($producto) ? $producto['id'] : '' ?>">
        <label>Nombre: <input type="text" name="nombre" required></label><br>
        <label>Precio: <input type="text" name="precio" required></label><br>
        <label>Cantidad: <input type="number" name="cantidad" required></label><br>
        <button type="submit">Añadir Producto</button>
    </form>

    <h2>Lista</h2>
    <h2>Lista de Productos</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($productos as $producto): ?>
            <tr>
                <td><?= $producto['id'] ?></td>
                <td><?= $producto['nombre'] ?></td>
                <td><?= $producto['precio'] ?></td>
                <td><?= $producto['cantidad'] ?></td>
                <td>
                    <form method="POST" action="index.php?action=editar" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $producto['id'] ?>">
                        <input type="text" name="nombre" value="<?= $producto['nombre'] ?>" required>
                        <input type="text" name="precio" value="<?= $producto['precio'] ?>" required>
                        <input type="number" name="cantidad" value="<?= $producto['cantidad'] ?>" required>
                        <button type="submit">Actualizar</button>
                    </form>
                    <form method="POST" action="index.php?action=eliminar" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $producto['id'] ?>">
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>

    </table>
</body>

</html>