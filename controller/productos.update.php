<?php
include_once "../model/producto.php";

$nombrePro = ($_POST["txtNombrePro"]);
$precioPro = ($_POST["txtPrecioPro"]);
$cantidadPro = ($_POST["txtCantidadPro"]);
$descripcionPro = ($_POST["txtDescripPro"]);
$id = ($_POST["id"]);

$product = new \modelo\Producto;

$product->setNombrePro($nombrePro);
$product->setPrecioPro($precioPro);
$product->setCantidadPro($cantidadPro);
$product->setDescripcionPro($descripcionPro);
$product->setId($id);

$response = $product->update();

echo json_encode($response);

unset($product);
unset($response);
?>