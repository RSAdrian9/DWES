<?php
spl_autoload_register(function ($class) {
    // Cambia las barras invertidas (\) del namespace por barras (/)
    $path = str_replace('\\', '/', $class) . '.php';

    // Define la ruta base del proyecto
    $baseDir = __DIR__ . '/../';

    // Crea la ruta completa
    $fullPath = $baseDir . $path;

    // Comprueba si el archivo existe y lo incluye
    if (file_exists($fullPath)) {
        require_once $fullPath;
    } else {
        die("El archivo para la clase {$class} no se encuentra en {$fullPath}");
    }
});



