<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductG;
class ProductController extends BaseController{
    public function index() {
        $keyword = $_GET['keyword'];
                if(isset($keyword)) {
                    $keyword = $_GET['keyword'];
                $products = Product::where('name', 'like', "%$keyword%")->get();
                }else{
                    $products = Product::all();
                }
            
            
        // $products = Product::all();
        $this->render('product.index', compact('products'));
    }

    public function detail(){
        echo Category::all();
    }
    public function AddProduct()
    {
       
         $category = Category::all();
       
       $this->render('product.create_product',compact('category'));
    }
    public function AddProductSave()
    {
        
      
      
        $dataProduct = $_POST;
        $model = new Product();
        $model->fill($dataProduct);

        $okupload = false;
        if($_FILES['image']['size'] > 0) {
            $okupload = true;
            $image = uniqid() . $_FILES['image']['name'];
        }else{
            $image = '';
        }
        if ($okupload) {
            move_uploaded_file($_FILES['image']['tmp_name'], './public/images/'. $image);  
            $fileimg = './public/images/'.$image;
        }

        $model->image = $fileimg;

        $model->save();
    //    $_SESSION['message_info'] = "Thêm dữ liệu thành công";
    
       header("Location: ./");
    }
    public function UpdateProduct()
    {
        $id = isset($_GET['id']) ? $_GET['id'] : " ";
        $category = Category::all();
        $product = Product::find($id);
        $this->render('product.update_product_save',[ 
                'category' => $category,
                 'product' => $product
        ]);

    }
        
    public function UpdateProductSave(){
        $id = isset($_GET['id']) ? $_GET['id'] : " ";
        $product = Product::find($id);
        $data = $_POST;
       
        $hinhcu = isset($_POST['anh']) ? $_POST['anh'] : " ";
       
        if(isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
         
            $image = uniqid() . $_FILES['image']['name'];
            move_uploaded_file($_FILES['image']['tmp_name'], './public/images/'. $image);  
            $fileimg = './public/images/'.$image;
        }else{
            $fileimg = $hinhcu;  
        }

        $product->image = $fileimg;
        $product->fill($data);
        $product->save();
    //    $_SESSION['message_info'] = "Thêm dữ liệu thành công";
    
       header("Location: ./");


    }
    public function DeleteProduct()
    {
        $id = $_GET['id'];
        Product::destroy($id);
        header('Location: ./'); 
    }

}

?>