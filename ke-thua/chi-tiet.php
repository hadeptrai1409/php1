<?php
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
                    <th>Tên sản phẩm</th>
                    <th>Anh</th>
                    <th>Gia</th>
                    <th>Chi tiet</th>
                    <th>Danh gia</th>
                    <th>View</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($product as $p) : ?>
            <tr>
                    <td><?=$p->name  ?></td>
                    <td ><img style="width: 100px;height:100px" src="<?=$p->image  ?>" alt=""></td>
                    <td><?=$p->price  ?></td>
                    <td><?=$p->detail  ?></td>
                    <td><?=$p->star  ?></td>
                    <td><?=$p->views  ?></td>
            </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>