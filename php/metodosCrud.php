<?php 

    class metodos {

        public function mostrarDatos ($sql){
            $c = new conectar();
            $conexion = $c-> conexion();

            $result = mysqli_query($conexion,$sql);

            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }

        public function insertarDatosNombre ($datos){
            $c = new conectar();
            $conexion = $c-> conexion();

            $sql = "INSERT into infobasica (nombre,apellido,fechaNac,matricula,contrasena)
                    values ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]')";

            return $result=mysqli_query($conexion,$sql);
        }

        public function actualizarDatosNombre ($nom,$apellido,$fecha,$pass,$contrasena,$mat){
            $c = new conectar();
            $conexion = $c-> conexion();

            $sql = "UPDATE infobasica SET nombre='".$nom."', apellido='".$apellido."',fechaNac='".$fecha."',contrasena='".$pass."' WHERE matricula = '".$mat."'";
            
            return $result=mysqli_query($conexion,$sql);
        }   

        public function eliminarDatosNombre ($matricula){
            $c = new conectar();
            $conexion = $c-> conexion();
            $sql = "DELETE from infobasica where matricula= '$matricula'";                                                                                         
            
            return $result=mysqli_query($conexion,$sql);
        }   
    }

?>