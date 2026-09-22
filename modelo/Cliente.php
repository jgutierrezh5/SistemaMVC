<?php
class Cliente {
    private $db;

    public function __construct() {
        $this->db = (new Database())->conectar();
    }

    public function listar() {
        return $this->db->query("SELECT * FROM clientes ORDER BY id DESC")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function guardar($nombre, $telefono, $correo) {
        $sql = "INSERT INTO clientes (nombre, telefono, correo) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$nombre, $telefono, $correo]);
    }

    public function eliminar($id) {
        $stmt = $this->db->prepare("DELETE FROM clientes WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
?>