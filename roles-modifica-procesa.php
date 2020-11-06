<?php
require_once ("librerias/conexionBD.php");

$id = $_REQUEST['id'];

$desc = $_POST['descripcion'];


			$sql ="UPDATE roles SET descripcion='$desc' WHERE id='$id'";

			$query =$con->query($sql);

			if (!$query) die('Error al insertar');
			header('Location: roles.php');
		
			
			//if($query!=null){
			//	print "<script>alert(\"Modificación Exitosa \");window.location='estudiantes.php';</script>";
			//}else{
			//	print"<script>alert(\"Error al cambiar\");window.location='estudiantes.php';</script>";
			//}

?>

