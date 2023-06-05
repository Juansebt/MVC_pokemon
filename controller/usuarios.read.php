<?php
include_once "../model/usuario.php";

$user = new \modelo\Usuario;
$response = $user->read();
echo json_encode($response);

unset($user);
unset($response);
?>