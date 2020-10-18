<?php
require_once './Category.php';

// quản lý:
// hiển thị danh sách, thêm, sửa, xóa dữ liệu 
// cho 2 bảng categories & products trong db

$cate = Category::where(['id', '>', 4])->first();
echo "<pre>";
var_dump($cate);die;


?>
<?php
require_once './Category.php';

// quản lý:
// hiển thị danh sách, thêm, sửa, xóa dữ liệu 
// cho 2 bảng categories & products trong db

// tạo mới dữ liệu
// $data = [
//     'cate_name' => "Cao đẳng FPT",
//     'show_menu' => 1,
//     'desc' => "someone"
// ];
// $model = new Category();
// $model->insert($data);

// cập nhật dữ liệu
// $data = [
//     'cate_name' => "Cao đẳng FPT update",
//     'show_menu' => 0,
//     'desc' => "something"
// ];
// $id = 14;
// $model = Category::find($id);
// $model->update($data);

// xóa bản ghi theo id
// Category::destroy($id);


// lấy toàn bộ dữ liệu của Category
$cates = Category::all();
echo "<pre>";




?>