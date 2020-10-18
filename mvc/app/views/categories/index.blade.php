@extends('layouts.main')
@section('title', 'PT15211-web - Trang chủ')
@section('content')
    @include('layouts.script')

    <title>Danh mục</title>
 
  <body>
 <div class="container">
 
 <table style="margin-top: 20px" class="table table-bordered">
 <a  href="add-category"><button style="margin-top: 130px" type="button" class="btn btn-success">Thêm</button></a> 
 <a href="{{BASE_URL . './'}}"><button style="margin-top: 130px; margin-left: 20px" type="button" style="margin-left: 20px;" class="btn btn-primary">Trang Chủ</button></a>
    <thead > 
    <tr> 
    <th>ID</th> 
    <th>Cate_Name</th>  
    <th>Slug</th> 
    <th>Show_menu</th> 
    <th>Desc</th> 
    <th>ACTION</th> 
    </tr> 
    </thead>
    <tbody>
    @foreach($category as $cate)
    <tr> 
    <td>{{$cate->id}}</td>    
    <td>{{$cate->cate_name}}</td>  
    <td>{{$cate->slug}}</td> 
    <td>{{$cate->show_menu}}</td> 
    <td>{{$cate->desc}}</td>  
    <td> 
            <a href="{{BASE_URL . 'update-category?id=' . $cate->id }}"><button style="width: 67px; margin-top: 5px" type="button" class="btn btn-primary">Sửa</button></a>    
            <a href="{{BASE_URL . 'delete-category?id=' . $cate->id }}"><button style="width: 67px; margin-top: 5px" type="button" class="btn btn-danger">Xóa</button></a> 
    </td> 
    </tr>
    @endforeach
    </tbody>
    </table>
 </div> 

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('layouts.script')
  </body>
</html>