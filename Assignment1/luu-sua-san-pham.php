<?php
/*
    Nhận dữ liệu từ file sửa sp
    sau đó thực hiện lưu dữ liệu vào db dựa vào id
    id truyền từ form
    điều hướng về file index.php
*/



require_once "./Product.php";


if(isset($_POST['btn-submit'])) {
    extract($_REQUEST);
    echo "<pre>";
    var_dump($_REQUEST); 
    // var_dump($_FILES['image']);die;
    $anhcu = isset($_POST['anh']) ? $_POST['anh'] : " ";
    if($_FILES['image']['size'] > 0) {
        $okupload = true;
        $image = uniqid() . $_FILES['image']['name'];
    }else{
        $image = $anhcu;
    }
   
    $data = [
        'name' => $name,
        'image' => $image,
        'cate_id' => $cate_id,
        'price' => $price,
        'detail' => $detail,
        
    ];

    $modelUpdate = Product::find($id)->update($data);
    if ($okupload=true) {
        move_uploaded_file($_FILES['image']['tmp_name'], 'images/'. $image);
  
    }

    header('Location: index.php'); 
    die();

}
?>
