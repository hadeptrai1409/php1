<?php
// đối tượng là gì?
// => sự vật, sự việc có thể bao gồm 2 thành phần 
// cấu thành: - thuộc tính (attributes) & - hành động (action/method)
// cần phải quản lý trong dự án

// trong lập trình => đối tượng <=> kiểu dữ liệu mới => class



// sinh viên

// - mã sinh viên
// - tên
// - địa chỉ
// - ....

// - đóng tiền học
// - nghỉ học
// - học lại
// - đi thi
// - đi làm thêm
// - ...

class Phim {
public $tenphim;
public $tacgia; 
private $dienvien;
private $thoigian;

function setdienvien($d) {
    if($d > 0){
        $this->dienvien = $d;
    }else{
        $this->dienvien = 0;
    }

}
function getdienvien() {
    return $this->dienvien;
}
function thoigian($t) {
if($t > 59) {
    $this->thoigian = $t;
}else{
     $this->thoigian = 0;
}
}
function showthoigian() {
    return $this->thoigian;
}
}
 
 $ok = new Phim();
 $ok->setdienvien(30);
 echo $ok->tenphim;
 echo $ok->dienvien;

?>