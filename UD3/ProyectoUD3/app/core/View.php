<?php
namespace App\Core;

class View {
    public static function render($path, $data = []) {
        extract($data);
        require_once __DIR__ . "/../views/$path.php";
    }
}
