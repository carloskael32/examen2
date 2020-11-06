<?php 
require_once('librerias/conexionBD.php');

$usuario = $_POST['usuario'];
$correo = $_POST['correo'];
$pass = md5($_POST['pass']);


$sql = "INSERT INTO usuarios (usuario,correo,pass) VALUES ('$usuario','$correo','$pass')";

$result =  $con->query($sql);


if (!$result) die('Error al insertar');
header('Location: usuarios.php');
?>