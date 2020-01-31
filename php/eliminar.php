<?php 
    require_once('conexion.php');
    require_once('metodosCrud.php');

    $matricula = $_POST["mat"];

    $obj = new metodos ();
    if($obj->eliminarDatosNombre($matricula)==1){
        header ("location:../confirmar.html");
    }
    else{
        ?>
		<script language="javascript">
			alert("Hubo un error al eliminar");
		</script>
					
		<?php
					
    }
?>