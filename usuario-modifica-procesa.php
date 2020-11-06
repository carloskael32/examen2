<?php
require_once ("librerias/conexionBD.php");

$id = $_REQUEST['id'];

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$pass = md5($_POST['pass']);


		

			$sql ="UPDATE usuarios SET usuario='$usuario',correo='$correo',pass='$pass' WHERE id='$id'";

			$query =$con->query($sql);

			if (!$query) die('Error al insertar');
			header('Location: usuarios.php');
		
			
			//if($query!=null){
			//	print "<script>alert(\"Modificación Exitosa \");window.location='estudiantes.php';</script>";
			//}else{
			//	print"<script>alert(\"Error al cambiar\");window.location='estudiantes.php';</script>";
			//}

?>

