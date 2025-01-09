<?php
require_once __DIR__ . '/../models/Product.php';


class ProductController {
    private $pdo;
    private $categorias = ['Electrónica', 'Computadoras', 'Accesorios', 'Wearables', 'Fotografía', 'Monitores', 'Tabletas', 'Periféricos'];
    public function index() {
        $limite = 5;
        $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
        $offset = ($pagina - 1) * $limite;
        $productos = Product::obtenerTodos($limite, $offset);
        $totalProductos = Product::contar();
        require __DIR__ . '/../views/homeProduct.php';
    }
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Product::crear($_POST['nombre'], $_POST['categoria'], $_POST['precio'], $_POST['stock']);
            header('Location: index.php');
        } else {
            require __DIR__ . '/../views/addProduct.php';
        }
    }
    public function edit($id) {
        $producto = Product::obtenerPorId($id);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            Product::actualizar($id, $_POST['nombre'], $_POST['categoria'], $_POST['precio'], $_POST['stock']);
            header('Location: index.php');
        } else {
            require __DIR__ . '/../views/editProduct.php';
        }
    }
    public function delete($id) {
        Product::eliminar($id);
        header('Location: index.php');
    }
}
?>
