<?php 
require_once('librerias/conexionBD.php');

$desc = $_POST['descripcion'];


$sql = "INSERT INTO roles (descripcion) VALUES ('$desc')";

$result =  $con->query($sql);


if (!$result) die('Error al insertar');
header('Location: roles.php');
?>