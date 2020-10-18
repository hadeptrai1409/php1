<?php
/*
    form nhập thông tin để sửa 1 sản phẩm dựa 
    vào id trên đường dẫn
    khi submit form thì gửi data => luu-sua-san-pham.php
*/

require_once "./Category.php";
require_once "./Product.php";

$category =Category::all();

$id = $_GET['id'];
$pr = Product::find($id);
// echo "<pre>";
// var_dump($pr);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h2>Sửa sản phẩm</h2>
    <form action="luu-sua-san-pham.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Nhập Tên Sản Phẩm</label><br>
        <input class="form-control" class="form-control" name="name" value="<?=$pr->name?>" type="text"
            placeholder="Nhập tên sản phẩm">
            </div>
            <div class="form-group">
        <label for="">Image</label><br>
        <input class="form-control" name="image" type="file"><br>
        </div>
        <div class="form-group">
           
            <?php if($pr->image != " ") :   ?>
            <?php if(strlen(strstr($pr->image,'https://lorempixel.com')) > 0) :      ?>
            <img src="<?=$pr->image?>" width="100" alt=""></td>
            <?php else:   ?>
            <img src="images/<?=$pr->image?>" width="100" alt=""></td>
            <?php   endif;    ?>

            <?php  endif;   ?>
        </div>
        <div class="form-group">
        <input type="hidden" class="form-control" name="anh" value="<?=$pr->image  ?>">
        <input type="hidden" name="id" value="<?=$pr->id  ?>">
        </div>
        <div class="form-group">
        <label for="">Price</label><br>
        <input name="price" class="form-control" type="text" placeholder="price" value="<?=$pr->price?>"><br>
        </div>
        <div class="form-group">
        <label for="">Danh mục</label><br>
        <select class="form-control" name="cate_id" id="">
            <?php  foreach($category as $category) :   ?>
            <?php if($pr->cate_id == $category->id) :  ?>
            <option value="<?=$category->id  ?>" selected><?=Category::find($pr->cate_id)->cate_name   ?></option>
            <?php else:  ?>
            <option value="<?=$category->id  ?>"><?=$category->cate_name  ?></option>
            <?php  endif;    ?>

            <?php  endforeach;  ?>
        </select>
        </div>
        <div class="form-group">
        <label for="">Detail</label><br>
        <input class="form-control" name="detail" type="text"  value="<?=$pr->detail?>"><br>
        </div>
        <input name="btn-submit" type="submit" value="Gửi">
    </form>
    </div>
</body>

</html>