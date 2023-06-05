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

if (
    empty($tipoDoc) ||
    empty($numeroDoc) ||
    empty($nombre) ||
    empty($apellido) ||
    empty($correo) ||
    empty($password) ||
    empty($direccion) ||
    empty($telefono)
) {
    $response = "Por favor, complete todos los campos.";
} else {

    $user = new \modelo\Usuario();

    $user->setTipoDoc($tipoDoc);
    $user->setIdentificacion($numeroDoc);
    $user->setNombre($nombre);
    $user->setApellido($apellido);
    $user->setCorreo($correo);
    $user->setPassword($password);
    $user->setDireccion($direccion);
    $user->setTelefono($telefono);
    $user->setGenero($genero);
    $user->setRol($rol);

    $response = $user->create();
}

echo json_encode($response);

unset($response);
unset($user);
?>