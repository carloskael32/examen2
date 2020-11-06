<?php 
require_once('librerias/conexionBD.php');

$id_user = $_POST['id_user'];
$id_rol = $_POST['id_rol'];


$sql = "INSERT INTO permisos (id_user,id_rol) VALUES ('$id_user','$id_rol')";

$result =  $con->query($sql);


if (!$result) die('Error al insertar');
header('Location: permisos.php');
?>