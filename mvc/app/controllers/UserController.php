<?php
namespace App\Controllers;


use App\Models\User;
use App\Models\Category;
use App\Models\Product;


class UserController extends BaseController{
    public function index() {
      $user = User::all();
      $this->render('user.index',compact('user'));
  }
  
      public function AddUser()
      {
         
           $user = User::all();
         
         $this->render('user.create_user',compact('user'));
      }
      public function AddUserSave()
      {
          $data = $_POST;
          $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);
          $model = new User();

          $model->fill($data);
        
          
          if($_FILES['avatar']['size'] > 0) {
              $okupload = true;
              $image = uniqid() . $_FILES['avatar']['name'];
          }else{
              $image = '';
          }
          $fileimg = "";
          if (isset($_FILES['avatar']) && $_FILES['avatar']['size'] > 0 )  {
              move_uploaded_file($_FILES['avatar']['tmp_name'], './public/images/'. $image);  
              $fileimg = './public/images/'.$image;
          }
  
          $model->avatar = $fileimg;
        
          $model->save();
         header("Location: tai-khoan");
      }
      public function UpdateUser()
      {
          $id = isset($_GET['id']) ? $_GET['id'] : " ";
          $user = User::find($id);
          $this->render('user.update_user_save', \compact('user'));
  
      }
          
      public function UpdateUserSave(){
          $id = isset($_GET['id']) ? $_GET['id'] : "";
         
          $user = User::find($id);
         
          $data = $_POST;
          $hinhcu = isset($_POST['anh']) ? $_POST['anh'] : " ";
       
        if(isset($_FILES['avarar']) && $_FILES['avatar']['size'] > 0) {
         
            $image = uniqid() . $_FILES['avatar']['name'];
            move_uploaded_file($_FILES['avatar']['tmp_name'], './public/images/'. $image);  
            $fileimg = './public/images/'.$image;
        }else{
            $fileimg = $hinhcu;  
        }

        $user->avatar = $fileimg;
        
          $user->fill($data);
          $user->password = password_hash('password', PASSWORD_DEFAULT);
          $user->save();
      //    $_SESSION['message_info'] = "Thêm dữ liệu thành công";
      
         header("Location: tai-khoan");
  
  
      }
      public function DeleteUser()
      {
          $id = $_GET['id'];
          User::destroy($id);
          header('Location: tai-khoan'); 
      }
      public function Login() {
            if(empty($_POST['email'])){
                $address = "Mời nhậP địa chỉ email";
            }else{
                   $email = $_POST['email'];
            }

            if(empty($_POST['password'])){
                $p = "Mời nhậP password";
            }else{
                   $password = $_POST['password'];
            }
    
           if(isset($email)){
               $result = User::where('email',$email)->get();
              
            //    echo "<pre>";
            //    var_dump($result);
            if($result[0]->email != $email){
                echo "Tai khoan khong ddungs";
            }
           }
          $this->render('layout.index');
          if(isset($password)){
            $matkhaucu = $result[0]->password;
            if(password_verify($password,$matkhaucu)){
                $_SESSION['role'] = $result[0]->role;
                $_SESSION['name'] = $result[0]->name;

                if($_SESSION['role'] == 1){
                    header("Location : ./");
                    
                }
              
            }
        }

        if(isset($_SESSION['role']) == 1){
            header("Location : ./");
            
        }

      } 
      
      public function CheckLogin() {
        $result = $_POST;
        $check = User::where('email', LIKE , '$email')->get();
         var_dump($check);
      }
      public function logOut(){
        if(isset($_SESSION['role'])){
            unset($_SESSION['role']);
            unset($_SESSION['name']);
            header("Location : ./"); 
        }
    }
    public function registration() {
        $this->render('layout.registration',[]);
    }
  }

?>