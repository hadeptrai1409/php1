

<table style="margin-top=150px" class="table table-bordered">
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
    <a href="add-category"><button type="button" class="btn btn-success">Thêm</button></a> 
            <a href="{{BASE_URL . 'update-category?id=' . $cate->id }}"><button style="width: 67px; margin-top: 5px" type="button" class="btn btn-primary">Sửa</button></a>    
            <a href="{{BASE_URL . 'delete-category?id=' . $cate->id }}"><button style="width: 67px; margin-top: 5px" type="button" class="btn btn-danger">Xóa</button></a> 
    </td> 
    </tr>
    @endforeach
    </tbody>
    </table>