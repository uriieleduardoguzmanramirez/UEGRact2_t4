<?php
// Incluimos nuestro nuevo controlador de productos
require_once 'controllers/ProductoController.php';

$controller = new ProductoController();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
    if (method_exists($controller, $action)) {
        $controller->$action();
    } else {
        $controller->index();
    }
} else {
    $controller->index();
}
?>