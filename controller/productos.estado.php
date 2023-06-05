<?php
include_once "../model/producto.php";

$id = $_POST["id"];
$estado = $_POST["estado"];

if ($estado == 'A') {
    $estado = 'I';
} else {
    $estado = 'A';
}

$product = new \modelo\Producto();
$product->setId($id);
$product->setEstado($estado);
$response = $product->estado();
echo json_encode($response);
unset($product);
unset($response);

?>