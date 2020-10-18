@extends('layouts.main')
@section('title', 'PT15211-web - Trang chủ')
@section('content')
    @include('layouts.script')

    <title>User</title>
 
  <body style="margin-top: 120px">
 
 <a href="add-user"><button type="button" class="btn btn-success">Thêm</button></a> 
 <a href="{{BASE_URL . './'}}"><button type="button" style="margin-left: 20px;" class="btn btn-primary">Trang Chủ</button></a>
 <table style="margin-top=150px" class="table table-bordered">
    <thead >
    <tr> 
    <th>ID</th>
    <th>Name</th> 
    <th>Avatar</th> 
    <th>Email</th> 
    <th>Role</th> 
    <th>Password</th> 
    <th>ACTION</th>
    </tr>
    </thead>
    <tbody>
    @foreach($user as $users)
    <tr> 
    <td>{{$users->id}}</td>    
    <td>{{$users->name}}</td>  
    <th><img src="{{$users->avatar}}" width="100px" alt=""></th>
    <td>{{$users->email}}</td> 
    <td>{{$users->role}}</td>  
    <td>{{$users->password}}</td>  
    <td> 
            <a href="{{BASE_URL . 'update-user?id=' . $users->id }}"><button style="width: 67px; margin-top: 5px" type="button" class="btn btn-primary">Sửa</button></a>    
            <a href="{{BASE_URL . 'delete-user?id=' . $users->id }}"><button style="width: 67px; margin-top: 5px" type="button" class="btn btn-danger">Xóa</button></a> 
    </td> 
    </tr>
    @endforeach
    </tbody>
    </table>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    @include('layouts.script')
  </body>
</html>