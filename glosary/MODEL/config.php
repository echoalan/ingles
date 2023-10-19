<?php

class Config {
    
    private static $conn;

    public static function connection() {
        if (!isset(self::$conn)) {
            self::$conn = @mysqli_connect('localhost', 'root', '41103402', 'ingles');
            if (self::$conn === false) {
                // Manejo de errores
                die("Error de conexión: " . mysqli_connect_error());
            }
        }
        return self::$conn;
    }
}



?>