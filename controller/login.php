<?php
include_once "../model/usuario.php";

$correo = $_GET["correo"];
$password = $_GET["password"];

$login = new \modelo\Usuario;
$login->setCorreo($correo);
$login->setPassword($password);

$response = $login->login();

echo json_encode($response);

unset($login);
unset($response);
?>