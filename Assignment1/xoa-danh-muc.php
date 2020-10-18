<?php
require_once "./Category.php";

$id = $_GET['id'];

$Category = new Category();
$product = $Category->destroy($id);

header('Location: danh-muc.php');
die;
?>