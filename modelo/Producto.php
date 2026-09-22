<?php
class Producto {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conectar();
    }

    public function listar() {
        $sql = "SELECT p.*, m.nombre AS marca_nombre
                FROM productos p
                INNER JOIN marcas m ON p.marca_id = m.id
                ORDER BY p.id DESC";
        return $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre, $precio, $stock, $marca_id) {
        $sql = "INSERT INTO productos (nombre, precio, stock, marca_id) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$nombre, $precio, $stock, $marca_id]);
    }

    public function eliminar($id) {
        $stmt = $this->db->prepare("DELETE FROM productos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>