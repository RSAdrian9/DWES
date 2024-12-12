<?php
session_start();
require('../config/config.php');  // Asegúrate de que la conexión esté incluida

// Si el usuario no está logueado, lo redirigimos a login
if (!isset($_SESSION['usuario'])) {
    header("Location: /dwes/UD5/ProyectoUD5Estado/public/login.php");
    exit();
}

// Procesamos el formulario cuando se envía
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Obtenemos los datos del formulario
    $nombre = htmlspecialchars($_POST['nombre']);
    $descripcion = htmlspecialchars($_POST['descripcion']);
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];

    // Insertamos el producto en la base de datos
    $stmt = $db->prepare("INSERT INTO productos (nombre, descripcion, precio, stock) VALUES (:nombre, :descripcion, :precio, :stock)");
    $stmt->bindValue(':nombre', $nombre);
    $stmt->bindValue(':descripcion', $descripcion);
    $stmt->bindValue(':precio', $precio);
    $stmt->bindValue(':stock', $stock);

    if ($stmt->execute()) {
        // Si se inserta correctamente, redirigimos a la página de productos
        header("Location: /dwes/UD5/ProyectoUD5Estado/public/productos.php");
        exit();
    } else {
        $error = "Error al agregar el producto";
    }
}
?>