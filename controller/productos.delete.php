<?php
include_once "../model/producto.php";

$id = $_POST["id"];

$product = new \modelo\Producto;
$product->setId($id);

$response = $product->delete();

echo json_encode($response);

unset($product);
unset($response);
?>