<?php
/*
    Nhận dữ liệu từ file tạo sp
    sau đó thực hiện lưu dữ liệu vào db
    điều hướng về file index.php
*/
require_once "./Product.php"; 


if(isset($_POST['btn-submit'])) {
    extract($_REQUEST);
    $okupload = false;
    // var_dump($_FILES['image']);die;
    if($_FILES['image']['size'] > 0) {
        $okupload = true;
        $image = uniqid() . $_FILES['image']['name'];
    }else{
        $image = '';
    }
    if ($okupload) {
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/'. $image);  
    }

    $data = [
        'name' => $name,
        'image' => $image,
        'cate_id' => $cate_id,
        'price' => $price,
        'detail' => $detail
    ];
   
  var_dump($_FILES['image']);
    $model = new Product();
    $model->insert($data);
    header('Location: index.php'); 
    die();

}


?>