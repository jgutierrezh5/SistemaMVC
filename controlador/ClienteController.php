<?php
require_once 'modelo/Cliente.php';

class ClienteController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Cliente();
    }

    public function index() {
        $clientes = $this->modelo->listar();
        require 'vista/clientes/index.php';
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre']);
            $telefono = trim($_POST['telefono']);
            $correo = trim($_POST['correo']);

            if ($nombre !== '' && $telefono !== '' && $correo !== '') {
                $this->modelo->guardar($nombre, $telefono, $correo);
            }
        }
        header('Location: index.php?modulo=clientes');
        exit;
    }

    public function eliminar() {
        if (isset($_GET['id'])) {
            $this->modelo->eliminar((int)$_GET['id']);
        }
        header('Location: index.php?modulo=clientes');
        exit;
    }
}
?>