<?php
class ProductoModel {
    private $conn;
    private $table_name = "productos";

    public function __construct($db) {
        $this->conn = $db;
    }

    // 1. CREATE (Registrar un nuevo café o postre)
    public function registrar($nombre_producto, $categoria, $precio, $stock) {
        $query = "INSERT INTO " . $this->table_name . " (nombre_producto, categoria, precio, stock) VALUES (:nombre, :categoria, :precio, :stock)";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(":nombre", $nombre_producto);
        $stmt->bindParam(":categoria", $categoria);
        $stmt->bindParam(":precio", $precio);
        $stmt->bindParam(":stock", $stock);
        
        return $stmt->execute();
    }

    // 2. READ (Ver todo el menú)
    public function leerTodos() {
        $query = "SELECT * FROM " . $this->table_name . " ORDER BY fecha_registro DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    
    // Obtener un solo producto para editarlo
    public function obtenerPorId($id) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    // 3. UPDATE (Modificar precio o stock)
    public function actualizar($id, $nombre_producto, $categoria, $precio, $stock) {
        $query = "UPDATE " . $this->table_name . " SET nombre_producto = :nombre, categoria = :categoria, precio = :precio, stock = :stock WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nombre", $nombre_producto);
        $stmt->bindParam(":categoria", $categoria);
        $stmt->bindParam(":precio", $precio);
        $stmt->bindParam(":stock", $stock);
        
        return $stmt->execute();
    }

    // 4. DELETE (Quitar del menú)
    public function eliminar($id) {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = :id";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":id", $id);
        return $stmt->execute();
    }
}
?>