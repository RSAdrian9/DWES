<?php
require_once '../app/controllers/AuthController.php';
require_once '../app/models/User.php';

use App\Controllers\AuthController;

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
switch ($uri) {
    case '/login':
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            (new AuthController())->login();
        } else {
            include '../app/views/login.php';
        }
        break;
    case '/logout':
        (new AuthController())->logout();
        break;
    case '/products':
        // Example: Forward to a ProductsController
        break;
    default:
        echo '404 Not Found';
}
?>