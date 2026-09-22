<?php
require_once 'modelo/Marca.php';

class MarcaController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Marca();
    }

    public function index() {
        $marcas = $this->modelo->listar();
        require 'vista/marcas/index.php';
    }

    public function guardar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = trim($_POST['nombre']);
            $pais = trim($_POST['pais']);

            if ($nombre !== '' && $pais !== '') {
                $this->modelo->guardar($nombre, $pais);
            }
        }
        header('Location: index.php?modulo=marcas');
        exit;
    }

    public function eliminar() {
    $mensaje = '';

    if (isset($_GET['id'])) {
        $resultado = $this->modelo->eliminar((int)$_GET['id']);

        if (!$resultado) {
            $mensaje = 'No se puede eliminar la marca porque tiene productos asociados.';
        }
    }

    if ($mensaje !== '') {
        header('Location: index.php?modulo=marcas&mensaje=' . urlencode($mensaje));
    } else {
        header('Location: index.php?modulo=marcas');
    }

    exit;
}
}
?>
