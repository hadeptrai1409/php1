<?php
require_once "./Product.php";

$id = $_GET['id'];
$removeProduct = new Product();
$removeProduct->remove($id);

header("Location:http://localhost:8080/php/ke-thua/");
die();

?>