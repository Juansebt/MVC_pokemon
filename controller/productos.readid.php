<?php
include_once "../model/producto.php";

$id = $_GET["id"];

$product = new \modelo\Producto();
$product->setId($id);
$response = $product->readId();
echo json_encode($response);

unset($product);
unset($response);
?>