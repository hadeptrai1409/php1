<?php
namespace App\Controllers;

use App\Models\ProductG;
use App\Models\Product;
use App\Models\User;
use App\Models\Category;

class ProductGController extends BaseController {
    public function index() {
        $product_g = ProductG::all();
        $this->render('product_g.index', compact('product_g'));
    }
    public function AddProduct()
    {
       
         $product = ProductG::all();
       
       $this->render('product_g.create_productG',compact('product'));
    }
    public function AddProductSave()
    {
        $dataProduct = $_POST;
    
      
        
        
        if($_FILES['img_url']['size'] > 0) {
            $okupload = true;
            $image = uniqid() . $_FILES['img_url']['name'];
            // var_dump($image);
        }else{
            $image = '';
        }
        $fileimg = "";
        if (isset($_FILES['img_url']) && $_FILES['img_url']['size'] > 0 )  {
            move_uploaded_file($_FILES['img_url']['tmp_name'], './public/images/'. $image);  
            $fileimg = './public/images/'.$image;
        }
        $model = new ProductG();
        $model->fill($dataProduct);
        $model->img_url = $fileimg;

        $model->save();
    //    $_SESSION['message_info'] = "Thêm dữ liệu thành công";
    
       header("Location: product-g");
    }
    public function UpdateProduct()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : " ";
        $products = Product::all();
        $product = ProductG::find($id);
        $this->render('product_g.update_productG_save',[ 
                'products' => $products,
                 'productG' => $product
        ]);

    }

        
    public function UpdateProductSave(){
        $id = isset($_GET['id']) ? $_GET['id'] : " ";
        $product = ProductG::find($id);
        $data = $_POST;
        
        $hinhcu = isset($_POST['anh']) ? $_POST['anh'] : " ";
       
        if(isset($_FILES['img_url']) && $_FILES['img_url']['size'] > 0) {
         
            $image = uniqid() . $_FILES['img_url']['name'];
            move_uploaded_file($_FILES['img_url']['tmp_name'], './public/images/'. $image);  
            $fileimg = './public/images/'.$image;
        }else{
            $fileimg = $hinhcu;  
        }

        $product->img_url = $fileimg;
        $product->fill($data);
        $product->save();
    //    $_SESSION['message_info'] = "Thêm dữ liệu thành công";
    
       header("Location: product-g");


    }
    public function DeleteProduct()
    {
        $id = $_GET['id'];
        ProductG::destroy($id);
        header('Location: product-g'); 
    }
}

?>