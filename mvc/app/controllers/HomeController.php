<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\ProductG;

class HomeController extends BaseController{

    public function index(){
        $cates = Category::count();
        $product = Product::count();
        $users = User::count();
        $pro_g = ProductG::count();
        $category = Category::all();
        $products = Product::all();
        $product_g = ProductG::all();
        $user = User::all();
        $this->render('home.index', [
            'cates' => $cates ,
            'product' => $product ,
            'users' => $users ,
            'category' => $category ,
            'products' => $products ,
            'user' => $user ,
            'pro_g' => $pro_g,
            'product_g' => $product_g,
        ]);
    }
}

?>