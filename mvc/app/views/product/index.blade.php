@extends('layouts.main')
@section('title', 'PT15211-web - Trang chủ')
@section('content')

<body>
    <div class="container">
        <h2>DANH SÁCH SẢN PHẨM</h2>
        <table style="margin-top: 20px" class="table table-hover" border="1">
            <a href="add-product"><button type="button" class="btn btn-success">Thêm</button></a>
            <a href="./"><button type="button" style="margin-left: 20px;" class="btn btn-primary">Trang chủ
                </button></a>
                <form class="form-inline" method="GET">
                <input style="margin-left: 628px; height: 35px"  type="text" name="keyword" id="">
                <button style="height: 35px" class="btn btn-danger">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
                </svg>
                </button>
                </form>
            <thead>
                <th>Id</th>
                <th>Name</th>
                <th>Price</th>
                <th>Image</th>
                <th>Short_desc</th>
                <th>Detail</th>
                <th>Anh lien quan</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach($products as $pro)
                <tr>
                    <td>{{$pro->id}}</td>
                    <td>{{$pro->name}}</td>
                    <td>{{$pro->price}}</td>
                    <td><img src="{{$pro->image}}" width="100" alt=""></td>
                    <td>{{$pro->short_desc}}</td>
                    <td>{{$pro->detail}}</td>

                    <td>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-{{$pro->id}}">
                            View
                        </button>
                        
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal-{{$pro->id}}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">{{$pro->name}}</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        @foreach($pro->galleries as $img)
                                          <img src="{{$img->img_url}}" alt="" style="width:100px;height:100px">

                                        @endforeach
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                       
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td> 
                    <td>

                        <a href="{{BASE_URL . 'update-product?id=' . $pro->id }}"><button
                                style="width: 67px; margin-top: 5px" type="button"
                                class="btn btn-primary">Sửa</button></a>
                        <a href="{{BASE_URL . 'delete-product?id=' . $pro->id }}"><button
                                style="width: 67px; margin-top: 5px" type="button"
                                class="btn btn-danger">Xóa</button></a>

                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
</body>

@endsection