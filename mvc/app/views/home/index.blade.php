@extends('layouts.builder')
@extends('layouts.main')
@section('title', 'PT15211-web - Trang chủ')
@section('content')

<div class="row text-center">
    <div class="col-3">
        <div class="card" style="width: 15rem;">
            <img src="{{BASE_URL . 'public/images/user.png'}}" style="max-height: 180px"
                class="home-card-img card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Hiện có {{$users}} tài khoản</h5>
                <a href="{{BASE_URL . 'tai-khoan'}}" class="btn btn-primary">Chi tiết</a>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 15rem;">
            <img src="{{BASE_URL . 'public/images/danhmuc.png'}}" style="max-height: 180px"
                class="home-card-img card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Hiện có {{$cates}} danh mục</h5>
                <a href="{{BASE_URL . 'danh-muc'}}" class="btn btn-primary">Chi tiết</a>
            </div>
        </div>
    </div>
    <div class="col-3">
    <div class="card" style="width: 15rem;">
            <img src="{{BASE_URL . 'public/images/products.jpg'}}" style="height: 180px" class="home-card-img card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Hiện có {{$product}} sản phẩm</h5>
                <a href="{{BASE_URL . 'danh-muc'}}" class="btn btn-primary">Chi tiết</a>
            </div>
        </div>
    </div>
    <div class="col-3">
        <div class="card" style="width: 15rem;">
            <img src="{{BASE_URL . 'public/images/product.jpg'}}" style="height: 180px"
                class="home-card-img card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Hiện có {{$pro_g}} Sản Phẩm Galleries</h5>
                <a href="{{BASE_URL . 'product-g'}}" class="btn btn-primary">Chi tiết</a>
            </div>
        </div>
    </div>
</div>



@endsection