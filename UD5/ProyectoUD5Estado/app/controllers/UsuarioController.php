<?php
session_start();
require('config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    $stmt = $db->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $stmt->bindValue(':usuario', $usuario);
    $result = $stmt->execute();
    $user = $result->fetchArray();

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['usuario'] = $usuario;
        header("Location: productos.php");
    } else {
        echo "Usuario o contraseña incorrectos";
    }
}
?>