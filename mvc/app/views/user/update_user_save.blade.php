<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Sửa User</h2>
        <form action="update-user-save?id={{$user->id}}" enctype="multipart/form-data" method="POST">
            <div class="form-group">
                <label for="">Nhập Tên</label>
                <input name="name" class="form-control" type="text" value="{{$user->name}}" placeholder="Nhập Tên">
            </div>
            <div class="form-group">
                <label for="">Image</label><br>
                <input name="avatar" class="form-control" value="{{$user->avatar}}" type="file"><br>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input name="email" class="form-control" type="email" value="{{$user->email}}" placeholder="Nhập Email">
            </div>
            <div class="form-group">
                <label for="">Role</label>
                <input name="role" class="form-control" type="text" value="{{$user->role}}" placeholder="Nhập Role">
            </div>
            <div class="form-group">
                <label for="">Password</label><br>
                <input name="password" class="form-control" type="text" value="{{$user->password}}"
                    placeholder="Nhập Password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>