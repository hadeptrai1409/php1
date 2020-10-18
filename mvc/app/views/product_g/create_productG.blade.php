<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h2>Thêm Sản Phẩm</h2>
        <form action="add-product-g-save" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="">Product_id</label><br>
                <select class="form-control"  id="" name="product_id">
                    @foreach($product as $cate)
                    <option value="{{$cate->id}}">{{$cate->id}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="">Img_url</label>
                <input class="form-control" name="img_url" type="file">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


 
</body>