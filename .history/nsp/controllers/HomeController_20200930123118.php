<?php
namespace Controllers;
require_once "../models/Product.php";
use Models\Product;
class HomController {
    public function index() {
        // lấy ra danh sách tất cả sản phẩm

        var_dump(Product::all());
    }
}
$x = new HomController();
$x->index();

?>