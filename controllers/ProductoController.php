<?php
// Requerimos los archivos de conexión y modelo
require_once 'config/conexion.php';
require_once 'models/ProductoModel.php';

class ProductoController {
    private $model;

    public function __construct() {
        $conexion = new Conexion();
        $db = $conexion->obtenerConexion();
        $this->model = new ProductoModel($db);
    }

    // Cargar la página principal
    public function index() {
        $productos = $this->model->leerTodos();
        require_once 'views/index.php';
    }

    // Registrar nuevo producto
    public function crear() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->registrar($_POST['nombre_producto'], $_POST['categoria'], $_POST['precio'], $_POST['stock']);
            header("Location: index.php");
        } else {
            require_once 'views/crear.php';
        }
    }

    // Editar producto
    public function editar() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->actualizar($_POST['id'], $_POST['nombre_producto'], $_POST['categoria'], $_POST['precio'], $_POST['stock']);
            header("Location: index.php");
        } else {
            $id = $_GET['id'];
            $producto = $this->model->obtenerPorId($id);
            require_once 'views/editar.php';
        }
    }

    // Eliminar producto
    public function eliminar() {
        if (isset($_GET['id'])) {
            $this->model->eliminar($_GET['id']);
        }
        header("Location: index.php");
    }
}
?>  