<?php

$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once "./app/controllers/HomeController.php";
switch ($url) {
case '/';
// gọi đến hàm index của Controller
break;
case 'san-pham':
    // gọi đến hàm index của ProductController
break;
case 'chi-tiet':
    // gọi đến hàm detail của ProductController
break;
default:
// code
break;
}

?>