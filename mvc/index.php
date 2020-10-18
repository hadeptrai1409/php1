<?php
ob_start();
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './config/helpers.php';
require_once './vendor/autoload.php';
require_once './config/db.php';

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;
use App\Controllers\UserController;
use App\Controllers\ProductGController;

if($url == 'dang-ky'){
    $ctr = new UserController();
    $ctr->registration(); 
}else if(isset($_SESSION['role']) != 1) {
    $ctr = new UserController();
    $ctr->Login(); 
}else{
switch ($url) {
    case '/':
        # gọi đến hàm index của HomeController
        $ctr = new HomeController();
        $ctr->index();
        break;
    case 'san-pham':
        # gọi đến hàm index của ProductController
        # view products/index.blade.php
        # hiển thị danh sách sản phẩm
        $ctr = new ProductController();
        $ctr->index();
        break;
    case 'add-product':
        # Thêm dữ liệu vào product
        $ctr = new ProductController();
        $ctr->AddProduct();
    break;
    case 'add-product-save':
        # Thêm dữ liệu vào product
        $ctr = new ProductController();
        $ctr->AddProductSave();
    break;
    case 'update-product':
        # Sửa dữ liệu vào product
        $ctr = new ProductController();
        $ctr->UpdateProduct();
    break;
    case 'update-product-save':
        # Sửa dữ liệu vào product
        $ctr = new ProductController();
        $ctr->UpdateProductSave();
    break;
    case 'delete-product':
        # Xoá dữ liệu vào product
        $ctr = new ProductController();
        $ctr->DeleteProduct();
    break;
    case 'danh-muc':
        # gọi đến hàm index của CategoryController
        # view Category/index.blade.php
        # hiển thị danh sách danh mục
        $ctr = new CategoryController();
        $ctr->index();
        break;
    case 'add-category':
        # Thêm dữ liệu vào category
        $ctr = new CategoryController();
        $ctr->addCategory();
    break;
    case 'add-category-save':
        # Thêm dữ liệu vào category
        $ctr = new CategoryController();
        $ctr->addCategorySave();
    break;
    case 'update-category':
        # Sửa dữ liệu vào product
        $ctr = new CategoryController();
        $ctr->UpdateCategory();
    break;
    case 'update-category-save':
        # Sửa dữ liệu vào product
        $ctr = new CategoryController();
        $ctr->UpdateCategorySave();
    break;
    case 'delete-category':
        # Xoá dữ liệu vào product
        $ctr = new CategoryController();
        $ctr->DeleteCategory();
    break;
    case 'tai-khoan':
        # gọi đến hàm index của UserController
        $ctr = new UserController();
        $ctr->index();
        break;
    case 'add-user':
        # Thêm dữ liệu vào user
        $ctr = new UserController();
        $ctr->addUser();
    break;
    case 'add-user-save':
        # Thêm dữ liệu vào user
        $ctr = new UserController();
        $ctr->addUserSave();
    break;
    case 'update-user':
        # Sửa dữ liệu vào user
        $ctr = new UserController();
        $ctr->UpdateUser();
    break;
    case 'update-user-save':
        # Sửa dữ liệu vào user
        $ctr = new UserController();
        $ctr->UpdateUserSave();
    break;
    case 'delete-user':
        # Xoá dữ liệu vào user
        $ctr = new UserController();
        $ctr->DeleteUser();
    break;
    case 'product-g':
        # Lấy toàn bộ dữ liệu bảng Product_galleries
        $ctr = new ProductGController();
        $ctr->index();
    case 'add-product-g':
        # Thêm dữ liệu vào product
        $ctr = new ProductGController();
        $ctr->AddProduct();
    break;
    case 'add-product-g-save':
        # Thêm dữ liệu vào product
        $ctr = new ProductGController();
        $ctr->AddProductSave();
    break;
    case 'update-product-g':
        # Sửa dữ liệu vào product
        $ctr = new ProductGController();
        $ctr->UpdateProduct();
    break;
    case 'update-product-g-save':
        # Sửa dữ liệu vào product
        $ctr = new ProductGController();
        $ctr->UpdateProductSave();
    break;
    case 'delete-product-g':
        # Xoá dữ liệu vào product
        $ctr = new ProductGController();
        $ctr->DeleteProduct();
    break;
    case 'admin' :
        $ctr = new UserController();
        $ctr->Login();
    break;
    case 'dang-ky' :
        $ctr = new UserController();
        $ctr->registration();
    break;
    case 'logout':
        $ctr = new UserController();
        $ctr->logOut();
    break;
    default:
        # code...
        break;
}
}

?>