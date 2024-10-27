<?php
class BD {

    public static $instancia = null;

    public static function crearInstancia() {

        if (!isset(self::$instancia)) {
            try {
                $opciones = array(
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                );

                self::$instancia = new PDO('mysql:host=localhost;dbname=vistaris', 'root', '', $opciones);
               
            } catch (PDOException $e) {
                die("Error en la conexión: " . $e->getMessage());
            }
        }

        return self::$instancia;
    }
}
