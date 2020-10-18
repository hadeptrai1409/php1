<?php
namespace Controllers;
require_once "../models/Product.php";
require_once "../models/Category.php";
use Models\Product;
use Models\Category;
class HomController {
    public function index() {
        // lấy ra danh sách tất cả sản phẩm

        var_dump(Product::all());
    }

    public function DanhMuc() {
        // lấy ra tất cả danh mục sản  phẩm
        var_dump(Category::all());
    }
}
$x = new HomController();
$x->index();

?>