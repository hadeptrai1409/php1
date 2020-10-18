<?php
/*
    form nhập thông tin để sửa 1 sản phẩm dựa 
    vào id trên đường dẫn
    khi submit form thì gửi data => luu-sua-san-pham.php
*/

require_once "./Category.php";
require_once "./Product.php";

// $category=Category::all();
$id = $_GET['id'];
$pr = Category::find($id);
if(isset($_POST['btn-submit'])) {
    extract($_REQUEST);
    $data = [
        'cate_name' => $cate_name,
        'slug' => $slug,
        'show_menu' => $show_menu,
        'desc' => $desc
    ];
    $modelUpdate = Category::find($id)->update($data);
    header('Location: danh-muc.php'); 
    die();

}

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
        <h2>Sửa Danh Mục</h2>
        <form action="" method="POST" enctype="multipart/form-data">
            <div  class="form-group">
                    <label for="">Cate_name :</label><br>
                    <input type="text" name="cate_name"  class="form-control" placeholder="Nhập Cate_Name" value="<?=$pr->cate_name?>">
            </div>
            <div class="form-group">
                <label for="">Slug :</label>
                <input type="number" class="form-control" placeholder="Nhập Slug" value="<?=$pr->slug?>"
                    name="slug">
            </div>
            <div class="form-group">
                <label for="">Show_menu :</label>
                <input type="number" class="form-control" placeholder="Nhập Show_menu" value="<?=$pr->show_menu?>"
                    name="show_menu">
            </div>
            <div class="form-group">
                <label for="">Desc :</label>
                <input type="text" class="form-control" placeholder="Nhập Desc" value="<?=$pr->desc?>" name="desc">
            </div>
            <button name="btn-submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>