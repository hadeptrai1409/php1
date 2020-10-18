<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProductG extends Model {

protected $table = 'product_galleries';
protected  $fillable = ['img_url','product_id','created_at','updated_at'];


  public function getName(){
      return $this->beLongsTo(Product::class,'product_id');
  }

}


 

?>