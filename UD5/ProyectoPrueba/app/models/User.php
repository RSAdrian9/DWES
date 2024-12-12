<?php
namespace App\Models;

use PDO;

class User {
    private static function dbConnection() {
        return new PDO('sqlite:../config/ud5_login2.db');
    }

    public static function authenticate($username, $password) {
        $db = self::dbConnection();
        $stmt = $db->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
        $stmt->execute([$username, $password]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>