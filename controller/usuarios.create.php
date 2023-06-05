<?php
include_once "../model/usuario.php";

$tipoDoc = $_POST["tipoDoc"];
$numeroDoc = $_POST["numeroDoc"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$password = $_POST["password"];
$direccion = $_POST["direccion"];
$telefono = $_POST["telefono"];
$genero = $_POST["genero"];
$rol = $_POST["rol"];

$user = new \modelo\Usuario();

?>