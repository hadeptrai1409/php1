<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h2>Thêm danh mục</h2>
        <form action="add-category-save" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="">Nhập Cate_name :</label>
                <input type="text" class="form-control" placeholder="Nhập Cate_name" name="cate_name">
            </div>
            <div class="form-group">
                <label for="">Slug :</label>
                <input type="number" class="form-control" placeholder="Nhập Slug" name="slug">
            </div>
            <div class="form-group">
                <label for="">Show_menu :</label>
                <input type="number" class="form-control" placeholder="Nhập Show_menu" name="show_menu">
            </div>
            <div class="form-group">
                <label for="">Desc :</label>
                <input type="text" class="form-control" placeholder="Nhập Desc" name="desc">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>