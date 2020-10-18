<?php

/* 
Hiển thị danh sách sản phẩm
bao gồm thông tin sản phẩm 
tên danh mục mà sản phẩm đó thuộc về
(bonus điểm cho cn tìm kiếm)
*/

require_once "./Product.php";
require_once "./Category.php";

// $product = new Product();
// $products =  $product->all();


extract($_REQUEST);
$keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
if(isset($keyword)){
  $products = Product::where(["name" , "LIKE" , "%{$keyword}%"]) -> get();
}else{
  $products = Product::all();
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
 <div class="container">
 <h2>DANH SÁCH SẢN PHẨM</h2>
 <table class="table table-bordered">
 <a href="tao-san-pham-copy.php"><button type="button" class="btn btn-success">Thêm</button></a> 
 <a href="danh-muc.php"><button type="button" style="margin-left: 20px;" class="btn btn-primary">Danh mục </button></a> 
 <!-- <form style="margin-left:200px" method="GET" action="">
 <input type="text" name="search" placeholder="Search">
 <input class="btn btn-secondary" name="" type="submit">
 </form> -->
    <thead>
    <tr> 
    <th>ID</th>
    <th>Name</th> 
    <th>Image</th> 
    <th>Price</th> 
    <th>Cate_id</th> 
    <th>Detail</th> 
    <th>ACTION</th> 
    </tr>
    </thead>
    <tbody>
    <?php foreach($products as $pro): ?>
    <tr> 
    <td><?=$pro->id?></td>    
    <td><?=$pro->name?></td> 
    <?php if(strlen(strstr($pro->image,'https://lorempixel.com')) > 0) :      ?> 
      <td><img src="<?=$pro->image?>" width="100" alt=""></td> 
    <?php else:   ?>
      <td><img src="images/<?=$pro->image?>" width="100" alt=""></td> 
    <?php   endif;    ?>
      
    <td><?=$pro->price?></td> 
    <td><?=Category::find($pro->cate_id)->cate_name?></td> 
    <td><?=$pro->detail?></td> 
    <td> 
    <a href="sua-san-pham.php?id=<?=$pro->id ?>"><button type="button" class="btn btn-primary">Sửa</button></a>    
    <a href="xoa-san-pham.php?id=<?=$pro->id ?>"><button type="button" class="btn btn-danger">Xóa</button></a> 
    
    </td> 
 
    </tr>
    <?php endforeach; ?>
    </tbody>
    </table>
 </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>