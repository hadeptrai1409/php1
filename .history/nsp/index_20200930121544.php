<?php
// php không cho phép tạo 2 hàm trùng tên 
// không cho phép 2 class trùng tên
// => sử dụng namespace : vùng không gian để phân biệt tên lớp tên hàm

namespace ChauA;
class Animal {
    
}
namespace ChauPhi;

use Animal;

class DongVat{

}
$x = new Animal();
var_dump($x);


?>