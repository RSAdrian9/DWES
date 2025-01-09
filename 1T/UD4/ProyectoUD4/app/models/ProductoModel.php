<?php
class ProductoModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query("SELECT * FROM productos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function crear($nombre, $precio, $cantidad) {
        $stmt = $this->pdo->prepare("INSERT INTO productos (nombre, precio, cantidad) VALUES (:nombre, :precio, :cantidad)");
        $stmt->execute([':nombre' => $nombre, ':precio' => $precio, ':cantidad' => $cantidad]);
    }

    public function editar($id, $nombre, $precio, $cantidad) {
        $stmt = $this->pdo->prepare("UPDATE productos SET nombre = :nombre, precio = :precio, cantidad = :cantidad WHERE id = :id");
        $stmt->execute([':nombre' => $nombre, ':precio' => $precio, ':cantidad' => $cantidad, ':id' => $id]);
    }

    public function eliminar($id) {
        $stmt = $this->pdo->prepare("DELETE FROM productos WHERE id = :id");
        $stmt->execute([':id' => $id]);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM productos WHERE id = :id");
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}