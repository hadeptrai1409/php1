<?php
/*
Hiển thị dnah sách danh mục trong database 
Id   Cate Name    Number Product
(Number Product là số lượng sản phẩm thuộc danh mục đnag hiển thị)

*/
require_once "./BaseModel.php";
require_once "./Product.php";

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
    <th>Id</th>
    <th>Cate Name</th>
    <th>Number Product</th>
    <th>Xóa</th>
    </tr>
    </thead>
    <tbody>
        <?php foreach($product as $p): ?>
        <tr>
            <td><?=$p->id?></td>
            <td><?=$p->name?></td>
            <td><?=$p->cate_id?></td>
            <td><a href="xoa.php?id=<?=$p->id?>">Xóa</td>
        </tr>
        <?php  endforeach; ?>
    </tbody>
    </table>
</body>
</html>