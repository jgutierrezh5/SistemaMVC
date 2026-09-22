<?php
class Marca {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conectar();
    }

    public function listar() {
        return $this->db->query("SELECT * FROM marcas ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre, $pais) {
        $sql = "INSERT INTO marcas (nombre, pais) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$nombre, $pais]);
    }

    public function eliminar($id) {
    try {
        $stmt = $this->db->prepare("DELETE FROM marcas WHERE id = ?");
        return $stmt->execute([$id]);
    } catch (PDOException $e) {
        return false;
    }
}
}
?>
