<?php
require_once "./Category.php";

/*
    form nhập thông tin để tạo mới sản phẩm
    khi submit form thì gửi data => luu-san-pham.php
*/

// $cate = new Category();
// $category = $cate->all();

$category=Category::all();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<!-- <h2>Thêm Sản Phẩm</h2>
    <form action="luu-san-pham.php" enctype="multipart/form-data" method="POST">
        <label for="">Nhập Tên Sản Phẩm</label><br>
        <input name="name" type="text" placeholder="Nhập tên sản phẩm"><br>
        <label for="">Image</label><br>
        <input name="image" type="file"><br>
        <label for="">Price</label><br>
        <input name="price" type="text" placeholder="price"><br>
        <label for="">Danh mục</label><br>
         <select name="cate_id" id="">
             <?php  foreach($category as $cate) :   ?>
                        <option value="<?=$cate->id?>"><?=$cate->cate_name   ?></option>

             <?php  endforeach;  ?>
         </select>
         <br>
        <label for="">Detail</label><br> 
        <input name="detail" type="text" placeholder="Detail"><br> 
        <input name="btn-submit" type="submit" value="Gửi"> 
    </form> 
     -->
    <div class="container">
        <h2>Thêm Sản Phẩm</h2>
        <form action="luu-san-pham.php" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="">Nhập Tên Sản Phẩm :</label>
                <input type="text" class="form-control" placeholder="Nhập Tên Sản Phẩm" name="name">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input class="form-control" name="image" type="file">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input name="price" class="form-control" type="number" placeholder="price">
            </div>
            <div class="form-group">
                <label for="">Danh mục</label><br>

                <select class="form-control" name="cate_id" id="">
             <?php  foreach($category as $category) :   ?>
                        <option value="<?=$category->id?>"><?=$category->cate_name   ?></option>

             <?php  endforeach;  ?>
         </select>
            </div>
            <div class="form-group">
                <label for="">Detail</label><br>
                <input name="detail" class="form-control" type="text" placeholder="Detail">
            </div>
            <button name="btn-submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>