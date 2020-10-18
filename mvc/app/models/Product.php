<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table = "products";
   protected $fillable = ['name','image', 'cate_id','price','short_desc','detail'];  

 public function getCateName(){
   $cate = Category::find($this->cate_id);
   if($cate){
       return $cate->cate_name;
   }else{
       return null;
   }
 }


 public function galleries(){
  return $this->hasMany(ProductG::class, 'product_id');
}
}


?>