<?php
require_once './Product.php';
require_once './User.php';
require_once './Category.php';

// $productModel = new Product();
// $products = $productModel->all();

// $userModel = new User();
// $users = $userModel->all();

// $cateModel = new Category();
// $cates = $productModel->findOne(93);

// echo "<pre>";

// var_dump($cates);
/*
1. ở trang index.php lấy ra danh sách tất cả các sản phẩm có trong db
hiển thị dạng table
mỗi dòng của table là 1 bản ghi trong db
2. cuối mỗi dòng thì sẽ có 1 đường link để xóa 
=> xoa.php?id=id của bản ghi

tại trang xoa.php thực hiện xóa sản phẩm dựa vào id sau đó 
điều hướng website về trang index

3. bên cạnh đường dẫn xóa thì sẽ có đường dẫn chi tiết
=> chi-tiet.php?id=id của bản ghi

tại trang chi tiết lấy ra thông tin chi tiết của sản phẩm theo id

tg làm bài: 12h30 -> 1h


*/

$productModel = new Product();
$product = $productModel->all();
// var_dump($product);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
    <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Tác vụ</th>
                    <th>Chi tiết</th>
                </tr>
            </thead>
            <tbody>
    <?php foreach($product as $p) : ?>
    <tr>
    <td><?=$p->id?></td>
    <td><?=$p->name?></td>
    <td><a href="xoa.php?id=<?=$p->id  ?>">Xóa</a></td>
    <td><a href="chi-tiet.php">Chi tiết</a></td>
    </tr>
    <?php  endforeach; ?>
    </tbody>
    </table>
</body>
</html>