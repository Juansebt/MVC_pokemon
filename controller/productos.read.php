<?php
include_once "../model/producto.php";

$product = new \modelo\Producto();
$response = $product->read();
unset($product);
echo json_encode($response);

?>