<?php
require_once __DIR__ . '/../../db.php';
require_once __DIR__ . '/../models/ProductoModel.php';

$productos = [];

class ProductoController {
    private $productoModel;

    public function __construct($pdo) {
        $this->productoModel = new ProductoModel($pdo);
    }

    public function index() {
        $productos = $this->productoModel->getAll();
        // Renderizar la vista home.php con los datos
        $this->render('productoview', ['productos' => $productos]);
    }

    private function render($view, $data = []) {
        // Convierte las claves del array en variables
        extract($data);
        // Incluir la vista correspondiente
        include __DIR__ . '/../views/' . $view . '.php';
    }

    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->productoModel->crear($_POST['nombre'], $_POST['precio'], $_POST['cantidad']);
            header("Location: index.php");
        }
    }

    public function editar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->productoModel->editar($_POST['id'], $_POST['nombre'], $_POST['precio'], $_POST['cantidad']);
            header("Location: index.php");
        }
    }

    public function eliminar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->productoModel->eliminar($_POST['id']);
            header("Location: index.php");
        }
    }
}
?>