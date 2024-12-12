<?php
namespace App\Controllers;

use App\Models\User;
session_start();

class AuthController {
    public function login() {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $user = User::authenticate($username, $password);
        if ($user) {
            $_SESSION['user_id'] = $user['id'];
            if (!empty($_POST['remember_me'])) {
                setcookie('user_id', $user['id'], time() + (86400 * 30), '/'); // 30 days
            }
            header('Location: /products');
        } else {
            echo 'Invalid login credentials';
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        setcookie('user_id', '', time() - 3600, '/'); // Delete cookie
        header('Location: /login');
    }
}
?>