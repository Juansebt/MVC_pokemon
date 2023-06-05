<?php
include_once "../model/producto.php";

// Paso 1
$nombrePro = $_POST["txtNombrePro"];
$precioPro = $_POST["txtPrecioPro"];
$cantidadPro = $_POST["txtCantidadPro"];
$descripcionPro = $_POST["txtDescripPro"];

// Paso 2 -> objeto
$product = new \modelo\Producto();

// Paso 3 enviar desde el controlador al modelo los datos capturados
$product->setNombrePro($nombrePro);
$product->setPrecioPro($precioPro);
$product->setCantidadPro($cantidadPro);
$product->setDescripcionPro($descripcionPro);

// Paso 4 Llamamo a las acción - metodo
$response = $product->create();

// Paso 5 destruimos el objeto
unset($product);

// Paso 6 imprimir mensaje
echo json_encode($response);

?>