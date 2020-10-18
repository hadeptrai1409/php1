<?php
// php không cho phép tạo 2 hàm trùng tên 
// không cho phép 2 class trùng tên
// => sử dụng namespace : vùng không gian để phân biệt tên lớp tên hàm

namespace ChauA;
class Animal {  
}
class ConVit{

}
namespace ChauPhi;
use ChauA\Animal as ChauAAnimal;
use ChauA\ConVit;

class Animal{

}
$x = new Animal();

$y = new ChauAAnimal();

echo "<pre>";

var_dump($x, $y, $z);
?>