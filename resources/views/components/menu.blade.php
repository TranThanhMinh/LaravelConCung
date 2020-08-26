
<div class="topMenu">
    <div style="background-color: white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-3" style="width: 100%;height: 80px ;">
                    <a  href="#"><img style="width: 100%;height: 80px"  src="https://sanvuonxanh.com/wp-content/uploads/2015/06/logo-dai-duong.png"></a>
                </div>
                <div class="col-lg-5 col-sm-5" style="width: 100%;height: 80px ;position: relative">
                    <form action="/" style="position: absolute;top: 30%;left: 5%;width: 100%">
                        <select style="height: 31px">
                            <option>All</option>
                            <option>Máy lọc khí dân dụng</option>
                            <option>Máy lọc khí dân dụng</option>
                        </select>
                        <input type="text" placeholder="Nhập sản phẩm cần tìm..."/>
                    <button type="submit"  value="tìm" style="background-color: #1c7430;border: none;color: white;height: 30px;width: 30px"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="col-lg-4 col-sm-4" style="width: 100%;height: 80px;position: relative">
                    <img style="position: absolute;left:0px; top: 15%;height: 50px!important;" src="https://sanvuonxanh.com/wp-content/uploads/2015/06/logo-dai-duong.png" style="float: left"/>
                    <div style="position: absolute;left:50px; top: 15%;">
                        <h6>Hotline đặt hàng</h6>
                        <h6 style="color: #1c7430; font-weight: bold"> 0865140590 & 0914717712</h6>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-sm " style="width: 100%;padding: 0!important;">
            <a class="navbar-brand" href="/home"><img style="width: 50px;height: 50px;" src="https://sanvuonxanh.com/wp-content/uploads/2015/06/logo-dai-duong.png"></a>
            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" id ="btnMenu" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav navbar-brand">

                    <li class="nav-item">
                        <a href="/home" class="nav-link  ">Trang chủ</a>
                    </li>
              {{--      <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle"  data-toggle="dropdown"></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="View/home.php">AAAA</a>
                            <a class="dropdown-item" href="#">AAAA</a>
                        </div>
                    </li>--}}
                    <li class="nav-item dropdown">
                        <a href="/pagination" class="nav-link">Thông tin</a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item">Chứng khoán</a>
                            <a class="dropdown-item">Tài chính</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="/news" class="nav-link">Tin tức</a>
                    </li>
                    <li class="nav-item">
                        <a href="/recruitment" class="nav-link">Tuyển dụng</a>
                    </li>
                    <li class="nav-item">
                        <a href="/user.html" class="nav-link"><i class="fa fa-user"></i> {{session('user')}}</a>
                    </li>
                    <li class="nav-item">
                        <a href="/cart" class="nav-link"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>
                    </li>
                    <li class="nav-item" id="ic_right">
                       <a href="/" class="nav-link "> <i class="fa fa-sign-out"></i> Đăng xuất</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>
