<?php
// ==========================================
// Punto de entrada principal de la aplicación
// ==========================================

require_once '../app/core/Router.php';
require_once '../app/core/Controller.php';
require_once '../app/core/Model.php';
require_once '../app/core/View.php';

// Inicializar el router
use App\Core\Router;

try {
    $router = new Router();
    $router->run();
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

?>