<?php
namespace App\Core;

class Router {
    public function run() {
        $url = $_GET['url'] ?? '/';
        
        // Interpretar la URL
        $parts = explode('/', trim($url, '/'));
        $controllerName = !empty($parts[0]) ? ucfirst($parts[0]) . 'Controller' : 'HomeController';
        $methodName = $parts[1] ?? 'index';
        
        $controllerFile = "../app/controllers/$controllerName.php";
        
        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();
            
            if (method_exists($controller, $methodName)) {
                $controller->$methodName();
            } else {
                echo "Método no encontrado.";
            }
        } else {
            echo "Controlador no encontrado.";
        }
    }
}

?>