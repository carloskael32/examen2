<?php

require_once ('librerias/conexionBD.php');

	$id = $_REQUEST['id'];
	

	$sql = "DELETE FROM permisos WHERE id = '$id'";
    $resultado = $con->query($sql);
    



	if($resultado){

			header("Location: permisos.php");

		}else{
			echo "Error al Eliminar";
			header("Location: permisos.php");	
		}



		


?>
