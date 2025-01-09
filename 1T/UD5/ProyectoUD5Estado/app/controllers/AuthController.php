<?php

require_once __DIR__ . '../../models/Database.php';

class AuthController
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getInstance()->getConnection();
    }

    // Método para manejar el inicio de sesión
    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $recordar = isset($_POST['recordar']); // Checkbox "Recordarme"

            $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
            $stmt->bindValue(':usuario', $usuario, PDO::PARAM_STR);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($password, $user['password'])) {
                // Iniciar sesión
                session_start();
                $_SESSION['usuario'] = $user['usuario'];

                // Si se selecciona "Recordar usuario", guardar una cookie
                if ($recordar) {
                    setcookie("usuario", $user['usuario'], time() + (30 * 24 * 60 * 60), "/"); // 30 días
                }

                // Redirigir a la página principal
                header("Location: index.php");
                exit();
            } else {
                // Devolver mensaje de error
                return "Usuario o contraseña incorrectos.";
            }
        }
    }

    // Método para cerrar sesión
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();

        // Borrar cookie de usuario, si existe
        if (isset($_COOKIE['usuario'])) {
            setcookie("usuario", "", time() - 3600, "/");
        }

        // Redirigir al login
        header("Location: logout.php");
        exit();
    }
}
