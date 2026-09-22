<?php
require_once 'modelo/Producto.php';
require_once 'modelo/Marca.php';

class ProductoController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Producto();
    }

    public function index() {
        $productos = $this->modelo->listar();
        $marcas = (new Marca())->listar();
        require 'vista/productos/index.php';
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre']);
            $precio = $_POST['precio'];
            $stock = $_POST['stock'];
            $marca_id = $_POST['marca_id'];

            if ($nombre !== '' && $precio !== '' && $stock !== '' && $marca_id !== '') {
                $this->modelo->guardar($nombre, $precio, $stock, $marca_id);
            }
        }
        header('Location: index.php?modulo=productos');
        exit;
    }

    public function eliminar() {
        if (isset($_GET['id'])) {
            $this->modelo->eliminar((int)$_GET['id']);
        }
        header('Location: index.php?modulo=productos');
        exit;
    }
}
?>