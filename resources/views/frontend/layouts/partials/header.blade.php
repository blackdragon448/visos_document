<header class="header-v4">
    <div class="container-menu-desktop">
        <div class="top-bar">
            <div class="content-topbar flex-sb-m h-full container">
                <div class="left-top-bar">
                    Thông tin giao dịch
                </div>
                <div class="right-top-bar flex-w h-full">
                    <a href="#" class="#">
                        Help & FAQs
                    </a>
                    <a href="#" class="#">
                        My Account
                    </a>
                    <a href="#" class="#">
                        Login
                    </a>
                    <a href="#" class="#">
                        Signup
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="wrap-menu-desktop">
        <nav class="limiter-menu-desktop container">
            <a href="#" class="logo">
                <img src="{{asset('theme/cozastore/images/icons/icon-visos.png')}}" alt="IMG-LOGO">
            </a>
            <div class="menu-desktop">
                <ul class="main-menu">
                    <li class="{{Request::is('')? 'active-menu': ''}}">
                        <a href="#">Trang chủ</a>
                    </li>
                </ul>
                <ul class="main-menu">
                    <li class="{{Request::is('')? 'active-menu': ''}}">
                        <a href="{{route('danhsachdulieu.index')}}">Tìm Kiếm</a>
                    </li>
                </ul>
                <ul class="main-menu">
                    <li class="dropdown"><a href="#">Quản lý hồ sơ<i class="fa fa-angle-down"></i></a>
                        <ul role="menu" class="sub-menu">
                            <li><a href="{{route('danhsachdulieu.create')}}">Nhập hồ sơ</a></li>
                            <li><a href="">Báo cáo theo công chứng viên</a></li>
                            <li><a href="">Báo cáo theo chuyển viên</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="main-menu">
                    <li class="{{Request::is('')? 'active-menu': ''}}">
                        <a href="#">Giới thiệu</a>
                    </li>
                </ul>
                <ul class="main-menu">
                    <li class="{{Request::is('')? 'active-menu': ''}}">
                        <a href="#">Liên hệ</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</header>