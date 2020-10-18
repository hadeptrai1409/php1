<?php

require_once "./Product.php";
require_once "./Category.php";


$category = Category::all();


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
 <h2>DANH SÁCH DANH MỤC</h2>
 <table class="table table-bordered">
 <a href="tao-danh-muc-copy.php"><button type="button" class="btn btn-success">Thêm</button></a> 
 <a href="index.php"><button type="button" style="margin-left: 20px;" class="btn btn-primary">Danh sách sản phẩm</button></a> 
    <thead>
    <tr> 
    <th>ID</th>
    <th>Cate_Name</th> 
    <th>Slug</th> 
    <th>Show_menu</th> 
    <th>Desc</th> 
    <th>ACTION</th> 
    </tr>
    </thead>
    <tbody>
    <?php foreach($category as $cate): ?>
    <tr> 
    <td><?=$cate->id?></td>    
    <td><?=$cate->cate_name?></td>  
    <td><?=$cate->slug?></td> 
    <td><?=$cate->show_menu?></td> 
    <td><?=$cate->desc?></td>  
    <td> 
    <a href="sua-danh-muc.php?id=<?=$cate->id ?>"><button type="button" class="btn btn-primary">Sửa</button></a>    
    <a href="xoa-danh-muc.php?id=<?=$cate->id ?>"><button type="button" class="btn btn-danger">Xóa</button></a>  
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