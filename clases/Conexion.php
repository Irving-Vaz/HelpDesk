<?php
    class Conexion {
        public function conectar(){
            $servidor = "localhost";
            $usuario = "alejo";
            $password = "1234r";
            $db = "helpdesk";
            $conexion = mysqli_connect($servidor, $usuario, $password, $db);
            return $conexion;
        }
    }

?>