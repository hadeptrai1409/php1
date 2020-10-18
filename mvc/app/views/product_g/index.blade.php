@extends('layouts.main')

@section('content')
    @include('layouts.script')

    <title>Danh mục</title>
 
  <body>
 <div class="container">
 
 <table style="margin-top: 20px" class="table table-bordered">
 <a  href="add-product-g"><button style="margin-top: 130px" type="button" class="btn btn-success">Thêm</button></a> 
 <a href="{{BASE_URL . './'}}"><button style="margin-top: 130px; margin-left: 20px" type="button" style="margin-left: 20px;" class="btn btn-primary">Trang Chủ</button></a>
    <thead > 
    <tr> 
    <th>ID</th> 
    <th>Product_id</th>  
    <th>img_url</th> 
    <th>ACTION</th> 
    </tr> 
    </thead>
    <tbody>
    @foreach($product_g as $pro_g)
    <tr> 
    <td>{{$pro_g->id}}</td>    
    <td>{{$pro_g->getName->name}}</td>  
    <td>
      <img src="{{$pro_g->img_url}}" alt="" style="width:100px;height:100px">
    </td>  
    
    <td> 
            <a href="{{BASE_URL . 'update-product-g?id=' . $pro_g->id }}"><button style="width: 67px; margin-top: 5px" type="button" class="btn btn-primary">Sửa</button></a>    
            <a href="{{BASE_URL . 'delete-product-g?id=' . $pro_g->id }}"><button style="width: 67px; margin-top: 5px" type="button" class="btn btn-danger">Xóa</button></a> 
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