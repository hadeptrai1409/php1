
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Sửa Sản Phẩm</h2>
        <form action="update-product-save?id={{$product->id}}" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="">Nhập Tên Sản Phẩm :</label>
                <input type="text" class="form-control" placeholder="Nhập Tên Sản Phẩm" value="{{$product->name}}" name="name">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input class="form-control" name="image" type="file">
                <img src="{{$product->image}}" alt="" style="width:100px;heihgt:100px"> <br>
        <input type="hidden" name="anh" value="{{$product->image}}">
            </div>
            <div class="form-group">
                <label for="">Price</label>
                <input name="price" class="form-control" type="number" value="{{$product->price}}" placeholder="price">
            </div>
            <div class="form-group">
                <label for="">Short_desc</label>
                <input name="short_desc" class="form-control" type="text" value="{{$product->short_desc}}" placeholder="Short_desc">
            </div>
            <div class="form-group">
                <label for="">Danh mục</label><br>

                <select class="form-control"  id="" name="cate_id">
                    @foreach($category as $cate)
                    <option value="{{$cate->id}}">{{$cate->cate_name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Detail</label><br>
                <input name="detail" class="form-control" type="text" value="{{$product->detail}}" placeholder="Detail">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
</body>
