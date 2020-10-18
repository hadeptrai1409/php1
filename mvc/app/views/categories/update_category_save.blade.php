<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>


    <div class="container">
        <h2>Sửa Danh Mục</h2>
        <form action="update-category-save?id={{$category->id}}" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <!-- <label for="">Nhập Cate_name :</label>
                <input type="text" class="form-control" placeholder="Nhập Cate_name" value="{{$category->cate_name}}"
                    name="cate_name"> -->
                    <label for="">Cate_name :</label><br>
      
      <select class="form-control" id="" name="cate_id">
         @foreach($category as $cate)
         @if($cate->id == $category->cate_id)
         <option value="{{$cate->id}}" selected>{{$category->getCateName()}}</option>  
               @else
               <option value="{{$cate->id}}" >{{$cate->cate_name}}</option>
        @endif
         @endforeach
   </select>
            </div>
            <div class="form-group">
                <label for="">Slug :</label>
                <input type="number" class="form-control" placeholder="Nhập Slug" value="{{$category->slug}}"
                    name="slug">
            </div>
            <div class="form-group">
                <label for="">Show_menu :</label>
                <input type="number" class="form-control" placeholder="Nhập Show_menu" value="{{$category->show_menu}}"
                    name="show_menu">
            </div>
            <div class="form-group">
                <label for="">Desc :</label>
                <input type="text" class="form-control" placeholder="Nhập Desc" value="{{$category->desc}}" name="desc">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

</body>