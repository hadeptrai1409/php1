<?php
require_once "./Product.php";

$id = $_GET['id'];

$products = new Product();
$product = $products->destroy($id);

header('Location: index.php');
die;
?>