<?php
// =====================================
// Configuración global de la aplicación
// =====================================

return [
    // Nombre de la aplicación
    'app_name' => 'Mi página web MVC con PHP',

    // Ambiente de trabajo: 'development' o 'production'
    'environment' => 'development',

    // URL base del proyecto
    'base_url' => 'http://localhost/dwes/ProyectoUD4/',

    // 2. Configuración de rutas
    'paths' => [
        'root' => dirname(__DIR__), // Ruta al directorio principal del proyecto
        'app' => dirname(__DIR__) . '/app',
        'public' => dirname(__DIR__) . '/public',
        'logs' => dirname(__DIR__) . '/logs',
    ],
];