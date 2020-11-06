<?php
require_once ("librerias/conexionBD.php");

$id = $_REQUEST['id'];

$id_user = $_POST['id_user'];
$id_rol = $_POST['id_rol'];


			$sql ="UPDATE permisos SET id_user='$id_user',id_rol='$id_rol' WHERE id='$id'";

			$query =$con->query($sql);

			if (!$query) die('Error al insertar');
			header('Location: permisos.php');
		
			
			//if($query!=null){
			//	print "<script>alert(\"Modificación Exitosa \");window.location='estudiantes.php';</script>";
			//}else{
			//	print"<script>alert(\"Error al cambiar\");window.location='estudiantes.php';</script>";
			//}

?>

