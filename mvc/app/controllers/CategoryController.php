<?php
namespace App\Controllers;

use App\Models\Category;
use App\Models\Product;

class CategoryController extends BaseController{
  public function index() {
    $category = Category::all();
    $this->render('categories.index',compact('category'));
}

    public function AddCategory()
    {
       
         $category = Category::all();
       
       $this->render('categories.create_category',compact('category'));
    }
    public function AddCategorySave()
    {
        
      
        $dataCategory = $_POST;
        $model = new Category();
        $model->fill($dataCategory);
        $model->save();
    //    $_SESSION['message_info'] = "Thêm dữ liệu thành công";
    
       header("Location: danh-muc");
    }
    public function UpdateCategory()
    {
        $id = $_GET['id'];
        $category = Category::find($id);
        $this->render('categories.update_category_save', \compact('category'));
    }
        
    public function UpdateCategorySave(){
        $id = isset($_GET['id']) ? $_GET['id'] : " ";
        $category = Category::find($id);
        $data = $_POST;
       
        
        $category->fill($data);
        $category->save();
    //    $_SESSION['message_info'] = "Thêm dữ liệu thành công";
    
       header("Location: danh-muc");


    }
    public function DeleteCategory(){
        // kiểm tra xem có danh mục với id trên đường dẫn hay không
        $id = isset($_GET['id']) ? $_GET['id'] : -1;
        $model = Category::find($id);
        // nếu có thì thực hiện xóa toàn bộ sản phẩm thuộc về danh mục đó đi
        if($model){
            Product::where('cate_id', $id)->delete();
            // thực hiện xóa danh mục
            $model->delete();
        }

        header('location: ' . BASE_URL . 'danh-muc');
    }
}


?>