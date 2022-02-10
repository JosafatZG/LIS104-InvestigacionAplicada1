<?php
class Conectar {
    public static function conexion(){
        $conexion = new mysqli("localhost", "root", "*contraseña de mysql*", "mvc_lis" );
        return $conexion;
    }
}
?>