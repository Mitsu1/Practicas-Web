<?php 

    class conectar{
        private $servidor = "localhost";
        private $usuario = "Mitsu";
        private $contrasena = "contrasena";
        private $baseDatos = "usuarios";

        public function conexion (){
            $conexion = 
            mysqli_connect($this->servidor,
                           $this->usuario, 
                           $this->contrasena,
                           $this->baseDatos); 
            return $conexion; 
        }
    }

    $obj = new conectar();
    if(!$obj->conexion()){
        echo "Hubo un error en la conexion";
    }

?>