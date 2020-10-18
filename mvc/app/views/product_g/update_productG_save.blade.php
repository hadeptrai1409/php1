<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h2>Sửa Sản Phẩm</h2>
        <form action="update-product-g-save?id={{$productG->id}}" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="">Product_id</label><br>
                <select class="form-control"  id="" name="product_id">
                    @foreach($products as $pro)
                         @if($pro->id == $productG->product_id)
                               <option value="{{$pro->id}}" selected>{{$productG->getName->name}}</option>
                            @else
                            <option value="{{$pro->id}}" >{{$pro->name}}</option>
                         @endif
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Img_url</label>
                <input class="form-control" name="img_url" type="file">
                <input type="hidden" name="anh" value="{{$productG->img_url}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


 
</body>