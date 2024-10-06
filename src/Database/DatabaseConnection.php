<?php

namespace Database;

class DatabaseConnection {
    private static ?DatabaseConnection $instance = null;
    private \PDO $connection;

    // Constructor privado para evitar la creación de más de una instancia
    private function __construct() {
        // Configuración de la conexión a la base de datos
        $host = 'mysql:host=localhost;dbname=youtube';
        $username = 'root';
        $password = '';
        $this->connection = new \PDO($host, $username, $password);
    }

    // Método estático para obtener la única instancia de la clase
    public static function getInstance(): DatabaseConnection {
        if (self::$instance === null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    // Método para obtener la conexión PDO
    public function getConnection(): \PDO {
        return $this->connection;
    }

    // Clonación prohibida
    // private function __clone() {}

    // Deserialización prohibida
    // public function __wakeup() {}
}
