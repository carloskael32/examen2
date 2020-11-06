<?php

require_once ('librerias/conexionBD.php');

	$id = $_REQUEST['id'];
	

	$sql = "DELETE FROM usuarios WHERE id = '$id'";
    $resultado = $con->query($sql);
    



	if($resultado){

			header("Location: usuarios.php");

		}else{
			echo "Error al Eliminar";
			header("Location: usuarios.php");	
		}



		


?>
