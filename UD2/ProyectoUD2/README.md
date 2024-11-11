# PixelGames 🎮

### Tienda de Videojuegos Online

PixelGames es una tienda online de videojuegos creada como proyecto educativo en PHP. El objetivo del proyecto es ofrecer una experiencia de navegación y consulta de videojuegos con categorías, visualización de detalles y una interfaz sencilla y amigable.

## 📑 Índice

##### [🚀 Características Principales](#-características-principales)
##### [🧩 Estructura de Archivos](#-estructura-de-archivos)
##### [📝 Descripción Técnica](#️-descripción-técnica)
##### [🌐 Estilos y Diseño](#-estilos-y-diseño)
##### [💡 Futuras mejoras](#-futuras-mejoras)
##### [🔧 Instalación y Configuración](#-instalación-y-configuración)
##### [🛠️ Tecnologías Usadas](#️-tecnologías-usadas)
##### [📬 Contacto](#-contacto)

## 🚀 Características Principales

- **Visualización de Juegos Destacados**: Muestra una selección de juegos destacados en la página principal.
- **Filtrado por Categoría**: Permite ver los juegos por **género** y **plataforma**, facilitando la navegación y la búsqueda de videojuegos.
- **Interfaz en Cuadrícula**: Los juegos se muestran en formato de tarjetas (cards) con detalles como imagen, plataforma, precio y género.
- **Descuento de Precios**: Funcionalidad para aplicar descuentos en el precio de los videojuegos (actualmente no implementada en la interfaz).

## 🧩 Estructura de Archivos

### Directorios y Archivos Principales

- **`index.php`**: Página de inicio que muestra los juegos destacados y la fecha y hora actual.
- **`games.php`**: Página para mostrar juegos filtrados por **género** o **plataforma**.
- **`includes/`**:
  - **`functions.php`**: Archivo que contiene funciones de apoyo, como `mostrarJuegos` y `aplicarDescuento`.
  - **`arrays.php`**: Contiene un array con la información de cada videojuego (título, plataforma, género, precio e imagen).
  - **`navbar.php` y `footer.php`**: Partes de la interfaz de navegación y pie de página para las páginas del proyecto.
- **`assets/`**: Carpeta con archivos de recursos estáticos.
  - **`css/`**: Archivo de estilos (`styles.css`) para dar formato visual a las páginas.
  - **`images/`**: Imágenes de los videojuegos.

## 📝 Descripción Técnica

### 1. **Estructura de Juegos (Array de Videojuegos)**

Cada videojuego está definido en un array asociativo en `arrays.php`, con los siguientes campos:

```php
$games = [
    ["title" => "The Legend of Zelda", "platform" => "Nintendo Switch", "genre" => "Aventura", "price" => 59.99, "image" => "assets/images/zelda.jpg"],
    // Más juegos...
];
```

### 2. **Función `mostrarJuegos()`**

En `functions.php`, esta función genera el código HTML para mostrar cada juego en una cuadrícula. Usa un `foreach` para recorrer el array de juegos y crear una tarjeta con los datos de cada videojuego:

```php
function mostrarJuegos($games) {
    foreach ($games as $game) {
        echo '<div class="game-card">';
        echo '<img src="' . htmlspecialchars($game["image"]) . '" alt="' . htmlspecialchars($game["title"]) . '">';
        echo '<h3>' . htmlspecialchars($game["title"]) . '</h3>';
        echo '<p>Plataforma: ' . htmlspecialchars($game["platform"]) . '</p>';
        echo '<p>Precio: $' . number_format($game["price"], 2) . '</p>';
        echo '</div>';
    }
}
```

### 3. **Filtrado por Categoría**

La página games.php permite filtrar los juegos mediante la variable $_GET['categoria']. Se filtran los juegos para mostrar aquellos que coincidan con la categoría de género o plataforma seleccionada.

En la página `games.php`, implementé un sistema de filtrado que permite a los usuarios ver los juegos según su plataforma o género. Esto se logra capturando el parámetro `categoria` de la URL, el cual indica la categoría seleccionada (por ejemplo, `plataforma` o `género`), y luego filtrando el array de juegos.

```php
$categoriaSeleccionada = $_GET['categoria'] ?? ''; // Obtenemos la categoría de la URL
$filteredGames = [];

// Filtrar juegos según la categoría seleccionada (puede ser "platform" o "genre")
foreach ($games as $game) {
    if ($game['platform'] === $categoriaSeleccionada || $game['genre'] === $categoriaSeleccionada) {
        $filteredGames[] = $game;
    }
}
```
- **Código**: Esta sección utiliza un bucle `foreach` para recorrer el array `$games` y seleccionar aquellos juegos que coinciden con la plataforma o el género de la categoría seleccionada.
- **Resultado**: Los juegos filtrados se almacenan en el array `$filteredGames`, el cual se presenta en la página. Si la categoría no tiene juegos asociados, se muestra un mensaje indicando que no hay resultados.

Este filtrado permite al usuario navegar por las categorías de manera intuitiva y visualizar solo los juegos que pertenecen a una plataforma o género específico, mejorando la experiencia de navegación.

### 4. **Función de Descuento aplicarDescuento()**

Aunque no está en uso actualmente en la interfaz, la función `aplicarDescuento` permite calcular un precio con descuento:

```php
function aplicarDescuento($precio, $descuento) {
    return $precio - ($precio * ($descuento / 100));
}
```

## 🌐 Estilos y Diseño
El estilo de la tienda se define en `assets/css/styles.css`. Algunas características incluyen:

- **Diseño Responsivo**: La cuadrícula de juegos se adapta a diferentes tamaños de pantalla.
- **Tarjetas Visuales para Videojuegos**: Cada juego tiene una tarjeta individual con imagen, título, plataforma y precio.

## 💡 Futuras mejoras

- Agregar funcionalidad de carrito de compras para que los usuarios puedan seleccionar juegos.
- Implementar un sistema de usuarios donde los clientes puedan crear cuentas.
- Búsqueda avanzada para encontrar juegos por título o precio.

## 🔧 Instalación y Configuración

#### 1. Clona este repositorio.

```php
git clone https://github.com/RSAdrian9/DWES.git
```

#### 2. Configura un servidor local como XAMPP o MAMP y coloca el proyecto en la carpeta de tu servidor (por ejemplo, en `htdocs` de XAMPP).

#### 3. Accede al proyecto en el navegador con la URL correspondiente, como `http://localhost/dwes/UD2/ProyectoUD2`.


## Tecnologías Usadas

- **PHP**: Lenguaje de programación utilizado para la lógica del lado del servidor.
- **HTML5**: Para la estructura de las páginas web.
- **CSS**: Para el diseño y estilo de las páginas.
- **Git**: Para el control de versiones y gestión del código fuente.

## Contacto

Si tienes alguna pregunta o sugerencia, no dudes en ponerte en contacto conmigo:

- **Correo electrónico**: adrian.dev24@gmail.com
- **LinkedIn**: [Adrián Ruiz Sánchez](https://www.linkedin.com/in/adri%C3%A1n-ruiz-s%C3%A1nchez?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BKgKVOuNITnaNj9nw7FwGqQ%3D%3D)
- **GitHub**: [RSAdrian9](https://github.com/RSAdrian9)
