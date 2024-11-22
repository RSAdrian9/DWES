<?php
namespace App\Core;

class Router {
    protected $routes = [];

    public function __construct() {
        // Definir rutas básicas
        $this->routes = [
            '/' => ['HomeController', 'index'],
            '/about' => ['PageController', 'about'],
            '/contact' => ['PageController', 'contact']
        ];
    }

    public function run() {
        $url = $this->getUrl();

        // Buscar la ruta correspondiente
        if (isset($this->routes[$url])) {
            [$controllerName, $methodName] = $this->routes[$url];

            // Cargar el controlador
            $controllerClass = "App\\Controllers\\$controllerName";
            if (class_exists($controllerClass) && method_exists($controllerClass, $methodName)) {
                $controller = new $controllerClass();
                call_user_func([$controller, $methodName]);
            } else {
                $this->error404();
            }
        } else {
            $this->error404();
        }
    }

    protected function getUrl() {
        $url = $_SERVER['REQUEST_URI'];
        $url = parse_url($url, PHP_URL_PATH); // Ignorar query strings
        return rtrim($url, '/'); // Eliminar barra final
    }

    protected function error404() {
        echo "404 - Página no encontrada";
    }
}
