<?php
require_once "./Category.php";
require_once "./Product.php";
/*
    form nhập thông tin để tạo mới sản phẩm
    khi submit form thì gửi data => luu-san-pham.php
*/

// $cate = new Category();
// $category = $cate->all();

$category=Category::all();

if(isset($_POST['btn-submit'])) {
    extract($_REQUEST);
    $data = [
        'cate_name' => $cate_name,
        'slug' => $slug,
        'desc' => $desc,
        'show_menu' => $show_menu,
    ];
   
    $model = new Category();
    $model->insert($data);
    header('Location: danh-muc.php'); 
    die();

}

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
    
    <div class="container">
        <h2>Thêm danh mục</h2>
        <form action="" enctype="multipart/form-data" method="POST">
            <div class="form-group">
            <label for="">Nhập Cate_name</label><br>
        <input name="cate_name" class="form-control" type="text" placeholder="Nhập Cate_name">
            </div>
            <div class="form-group">
            <label for="">Slug</label><br>
        <input name="slug" class="form-control"  type="text" placeholder="Slug">
            </div>
            <div class="form-group">
                <label for="">Show_menu :</label>
                <input type="number" class="form-control" placeholder="Nhập Show_menu" name="show_menu">
            </div>
            <div class="form-group">
                <label for="">Desc :</label>
                <input type="text" class="form-control" placeholder="Nhập Desc" name="desc">
            </div>
            <button name="btn-submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>