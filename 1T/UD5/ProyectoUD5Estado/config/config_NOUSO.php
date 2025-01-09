<?php
// Estructura inicial para el proyecto Tienda de Tecnología siguiendo el patrón MVC

// config.php
// Configuración de la base de datos
define('DB_NAME', 'tienda_tecnologia.db');

try {
    // Crear la base de datos si no existe
    $db = new SQLite3(DB_NAME);

    // Crear la tabla de usuarios si no existe
    $db->exec("CREATE TABLE IF NOT EXISTS usuarios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        usuario TEXT NOT NULL,
        password TEXT NOT NULL
    )");

    // Crear la tabla de productos (tecnología) si no existe
    $db->exec("CREATE TABLE IF NOT EXISTS productos (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre TEXT NOT NULL,
        categoria TEXT NOT NULL,
        precio REAL NOT NULL,
        stock INTEGER NOT NULL
    )");

    // Insertar un usuario admin por defecto si no existe
    $stmt = $db->prepare("SELECT * FROM usuarios WHERE usuario = :usuario");
    $stmt->bindValue(':usuario', 'admin');
    $result = $stmt->execute();

    if ($result->fetchArray() === false) {
        $stmt = $db->prepare("INSERT INTO usuarios (usuario, password) VALUES (:usuario, :password)");
        $stmt->bindValue(':usuario', 'admin');
        $stmt->bindValue(':password', password_hash('admin', PASSWORD_DEFAULT)); // Contraseña segura
        $stmt->execute();
    }

    // Insertar productos de prueba si la tabla está vacía
    $productosPrueba = [
        ['nombre' => 'Teléfono X', 'categoria' => 'Teléfono inteligente con pantalla AMOLED de 6.5 pulgadas.', 'precio' => 799.99, 'stock' => 50],
        ['nombre' => 'Laptop Pro', 'categoria' => 'Computadora portátil de alto rendimiento con procesador Intel i7.', 'precio' => 1199.99, 'stock' => 30],
        ['nombre' => 'Tablet Z', 'categoria' => 'Tableta de 10 pulgadas con lápiz óptico incluido.', 'precio' => 499.99, 'stock' => 20],
        ['nombre' => 'Auriculares Y', 'categoria' => 'Auriculares inalámbricos con cancelación de ruido.', 'precio' => 99.99, 'stock' => 100],
        ['nombre' => 'Reloj Inteligente', 'categoria' => 'Smartwatch con seguimiento de actividad y notificaciones.', 'precio' => 199.99, 'stock' => 75],
        ['nombre' => 'Teclado Mecánico', 'categoria' => 'Teclado mecánico retroiluminado RGB.', 'precio' => 79.99, 'stock' => 150],
        ['nombre' => 'Cargador Rápido', 'categoria' => 'Cargador rápido USB-C compatible con múltiples dispositivos.', 'precio' => 29.99, 'stock' => 200],
        ['nombre' => 'Cámara de Acción', 'categoria' => 'Cámara compacta resistente al agua y con grabación 4K.', 'precio' => 299.99, 'stock' => 40],
        ['nombre' => 'Monitor 4K', 'categoria' => 'Monitor UHD de 27 pulgadas con alta precisión de color.', 'precio' => 399.99, 'stock' => 25],
        ['nombre' => 'Mouse Ergonómico', 'categoria' => 'Ratón inalámbrico diseñado para reducir la tensión en la muñeca.', 'precio' => 49.99, 'stock' => 60]
    ];

    // Comprobar si la tabla está vacía
    $stmt = $db->query("SELECT COUNT(*) AS total FROM productos");
    $row = $stmt->fetchArray(SQLITE3_ASSOC);
    if ($row['total'] == 0) {
        foreach ($productosPrueba as $producto) {
            $stmt = $db->prepare("INSERT INTO productos (nombre, categoria, precio, stock) VALUES (:nombre, :categoria, :precio, :stock)");
            $stmt->bindValue(':nombre', $producto['nombre'], SQLITE3_TEXT);
            $stmt->bindValue(':categoria', $producto['categoria'], SQLITE3_TEXT);
            $stmt->bindValue(':precio', $producto['precio'], SQLITE3_FLOAT);
            $stmt->bindValue(':stock', $producto['stock'], SQLITE3_INTEGER);
            $stmt->execute();
        }
    }

    echo "Base de datos inicializada correctamente.";
} catch (Exception $e) {
    die("Error al conectar con la base de datos: " . $e->getMessage());
}
