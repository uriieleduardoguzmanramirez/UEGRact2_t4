<?php
class Conexion {
    // Credenciales de tu entorno local (XAMPP)
    private $host = "localhost";
    private $db_name = "cafeteria_db";    
    private $username = "root"; 
    private $password = ""; // XAMPP por defecto no tiene contraseña
    public $conn;

    public function obtenerConexion() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            // Esto asegura que los acentos y las "ñ" se guarden bien
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Error de conexión: " . $exception->getMessage();
        }
        return $this->conn;
    }
}
?>