        <style>
                .one{
            position: relative;
        }
        .two{
            position: absolute;
            top: 20px;
            display: none;
        }
        .one:hover .two{
            display: block;
        }
        .hello{
            color: white;
            margin-top: 16px;
        }
        </style>
       
        <nav class="navbar navbar-expand-lg bg-secondary fixed-top" id="mainNav">
            <div class="container"><a class="navbar-brand js-scroll-trigger" href="{{BASE_URL . './'}}">Admin</a>
                <button class="navbar-toggler navbar-toggler-right font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">Menu <i class="fas fa-bars"></i></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{BASE_URL . 'danh-muc'}}">Danh Mục</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{BASE_URL . 'san-pham'}}">Sản Phẩm</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{BASE_URL . 'tai-khoan'}}">Tài Khoản</a>
                        </li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="{{BASE_URL . 'product-g'}}">Sản Phẩm Galleries</a>
                        </li>
                       
                        <li class="nav-item mx-0 mx-lg-1">
                        <a class="" class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"  href="">
                       <div class="one">
                       <?php if(isset($_SESSION['role'])) : ?>
                            <p class="hello">Xin Chào {{$_SESSION['name'] }}  </p>
                            <a class="two"  href="logout">Đăng Xuất</a>
                               
                        <?php endif; ?></a>
                       </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
 

