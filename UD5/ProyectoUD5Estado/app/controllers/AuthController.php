<?php
// controlador/AuthController.php
// Controlador para manejar toda la lógica de autenticación (login, logout, sesiones y cookies)

session_start();
require_once __DIR__ . '/config/config.php';

$action = $_GET['action'] ?? 'login';

switch ($action) {
    case 'login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'] ?? '';
            $password = $_POST['password'] ?? '';

            if (login($usuario, $password)) {
                if (isset($_POST['remember'])) {
                    setcookie('usuario', $usuario, time() + (86400 * 30), "/"); // 30 días
                }
                header('Location: /app/controllers/ProductoController.php?action=list');
                exit;
            } else {
                $error = "Usuario o contraseña incorrectos.";
                include __DIR__ . '/public/login.php';
                exit;
            }
        }
        include __DIR__ . '/public/login.php';
        break;

    case 'logout':
        logout();
        break;

    default:
        echo "Acción no válida.";
        break;
}

function login($usuario, $password) {
    global $db;

    try {
        $stmt = $db->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
        $stmt->bindValue(':usuario', $usuario, SQLITE3_TEXT);
        $result = $stmt->execute();

        if ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            if (password_verify($password, $row['password'])) {
                $_SESSION['usuario'] = $usuario;
                return true;
            }
        }
        return false;
    } catch (Exception $e) {
        error_log("Error en login: " . $e->getMessage());
        return false;
    }
}

function logout() {
    session_destroy();
    if (isset($_COOKIE['usuario'])) {
        setcookie('usuario', '', time() - 3600, "/"); // Expirar cookie
    }
    header('Location: /public/login.php');
    exit;
}

function isLoggedIn() {
    return isset($_SESSION['usuario']);
}
?>
