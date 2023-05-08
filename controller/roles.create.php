<?php
include_once "./model/rol.php";

// echo json_encode($_POST["txtRol"]);

// Paso 1
$nombreRol = $_POST["txtRol"];

// Paso 2 -> objeto
$rolM = new \modelo\Rol();

// Paso 3 enviar desde el controlador al modelo los datos capturados
$rolM->setNombreRol($nombreRol);

// Paso 4 Llamamo a las acción - metodo
$response = $rolM->create();

// Paso 5 destruimos el objeto
unset($rolM);

// Paso 6 imprimir mensaje
echo json_encode($response);

?>