<?php
require_once 'config/database.php';

$modulo = isset($_GET['modulo']) ? $_GET['modulo'] : 'inicio';
$accion = isset($_GET['accion']) ? $_GET['accion'] : 'index';

switch ($modulo) {
    case 'marcas':
        require_once 'controlador/MarcaController.php';
        $controller = new MarcaController();
        break;
    case 'productos':
        require_once 'controlador/ProductoController.php';
        $controller = new ProductoController();
        break;
    case 'clientes':
        require_once 'controlador/ClienteController.php';
        $controller = new ClienteController();
        break;
    default:
        require_once 'vista/inicio.php';
        exit;
}

if (method_exists($controller, $accion)) {
    $controller->$accion();
} else {
    $controller->index();
}
?>