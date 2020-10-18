<?php
class NhanVien {
    var $ngaycong = 0;
    var $luongMotNgay = 0;
    function __construct($luong = 0)
    {
        $this->luongMotNgay = $luong;
    }
    function TinhLuong() {
        return $this->ngaycong*$this->luongMotNgay;
    }
}

class NhanVienBV extends NhanVien {
    // cộng thêm 10% lương do tính chất công việc
    const BONUS_SARALY = 10;
    function TinhLuong()
    {
        $luonggoc = parent::TinhLuong();
        // var_dump ($luonggoc);
        return $luonggoc+($luonggoc*(self::BONUS_SARALY/100));
    }
}

class NhanVienLC extends NhanVien {
    const BONUS_SARALY = 5;
    function TinhLuong()
    {
        $luonggoc = parent::TinhLuong();
        // var_dump ($luonggoc);
        return $luonggoc+($luonggoc*(self::BONUS_SARALY/100));
    }
}

// $tam = new NhanVienLC(5);
// $tam->ngaycong = 20;
// echo $tam->TinhLuong();

// BT : Tạp ra lớp Tòa Nhà

// lớp trường học là con của lớp tòa nhà

// lớp cơ quan doanh nghiệp cũng là con của lớp tòa nhà 
// biết rằng mỗi tòa nhà dịch vụ đều phải đóng phí vệ sinh môi trường mặc định bằng 10% của giá thuê
// tuy nhiên lớp trường học đc giảm 3% do là hoạt động giáo dục
// tòa nhà cơ quan mà không thuộc khối nhà nước thì sẽ phải đóng thêm 10% VAP
// viết các class và lấy ví dụ


class ToaNha {
var $giathuenha = 0.1;
const vesinhmoitruong = 0;
function __construct($gia = 0)
    {
        $this->giathuenha = $gia;
    }
    function TinhgiathueNha() {
        return $this->giathuenha+($this->giathuenha * self::vesinhmoitruong);
    }
}
class TruongHoc extends ToaNha {
// đc giảm 3% do hoạt động giáo dục
const BONUS_SARALY = 3;
function TinhgiathueNha()
{
    $giathuenha = parent::TinhgiathueNha();
    // var_dump ($luonggoc);
    return $this->giathuenha+($this->giathuenha * 0.07);
}
}
class CoQuanDoanhNghiep extends ToaNha {
// cộng thêm 10% lương do tính chất công việc
const VAT = 0.1;
function TinhgiathueNha()
{
    $tiengoc = parent::TinhgiathueNha();
    // var_dump ($luonggoc);
    return $tiengoc+ $this->giathuenha*self::VAT;
}
}


$tam = new CoQuanDoanhNghiep(15);
$tam->giathuenha = 15;
echo $tam->TinhgiathueNha();
?>