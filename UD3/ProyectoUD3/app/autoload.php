<?php
spl_autoload_register(function ($className) {
    // Convertir el namespace en una ruta de archivo
    $path = str_replace('\\', DIRECTORY_SEPARATOR, $className);
    $file = __DIR__ . '/../' . $path . '.php';
    
    if (file_exists($file)) {
        require_once $file;
    } else {
        die("El archivo $file no se encuentra.");
    }
});
