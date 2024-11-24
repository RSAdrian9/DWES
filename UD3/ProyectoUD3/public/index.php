<?php
require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/CategoryController.php';
require_once __DIR__ . '/../app/controllers/ContactController.php';
require_once __DIR__ . '/../app/models/HomeModel.php';

use App\Controllers\HomeController;
use App\Controllers\CategoryController;
use App\Controllers\ContactController;

// Verifica la URL solicitada (puedes usar $_GET['page'] o una lógica más avanzada)
$page = $_GET['page'] ?? 'home';
$action = $_GET['action'] ?? null;

switch ($page) {
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'categories':
        $controller = new CategoryController();

        // Si hay una acción dentro de la página "categories"
        if ($action === 'gamesByCategory' && isset($_GET['categoria'])) {
            $categoria = $_GET['categoria'];
            $controller->gamesByCategory($categoria); // Maneja la acción específica
        } else {
            $controller->categories(); // Carga la vista general de categorías
        }
        break;

    case 'contact':
        $controller = new ContactController();
        $controller->contact();
        break;

    default:
        http_response_code(404);
        echo "Página no encontrada";
        break;
}
