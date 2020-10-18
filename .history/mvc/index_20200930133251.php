<?php

$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once "./app/controllers/HomeController.php";
require_once "./app/controllers/ProductController.php";
require_once "./app/models/user.php";
use app\controllers\HomController;
use app\controllers\ProductController;
switch ($url) {
case '/';
// gọi đến hàm index của Controller
    $ctr = new HomController();
    $ctr->index();
break;
case 'san-pham':
    // gọi đến hàm index của ProductController => danh sách sản phẩm
    $ctr = new ProductController();
    $ctr->product();
break;
case 'chi-tiet':
    // gọi đến hàm detail của ProductController
    $ctr = new ProductController();
    $ctr->detail();
break;
default:
// code
break;
}

?>