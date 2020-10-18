<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Category extends Model{
    protected $table = 'categories';
    protected $fillable = ['cate_name','slug', 'show_menu','desc'];  

    public function getCateName(){
        $cate = Category::find($this->cate_id);
        if($cate){
            return $cate->cate_name;
        }else{
            return null;
        }
      }
}

?>