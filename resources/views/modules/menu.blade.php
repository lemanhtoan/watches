<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <p class="welcome-store">Chào mừng đến với hệ thống đồng hồ chính hãng Xwatch!</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="right-align">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <ul class="nav navbar-nav pull-right">

                    <div class="navbar-header">
                        <span class="visible-xs pull-left"
                              style="font-size:30px;cursor:pointer; padding-left: 10px; color: #ecf0f1;"
                              onclick="openNav()">&#9776; </span>
                        <span class="visible-xs pull-right"
                              style="font-size:20px;cursor:pointer; padding-right: 10px; padding-top: 8px; color: #FFFFFF;">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <a class="top-a" href="{{ url('/') }}"> Home </a>  &nbsp;
                                <a href="#" data-toggle="modal" data-target="#login-modal" style="color:#e67e22;"> Đăng nhập </a>
                                {{-- <a class="top-a" href="{{ url('/login') }}">Login</a> --}}
                            @else
                                <a class="top-a" href="{{ url('/user') }}"
                                   style="color:#c0392b;"><strong>{!!Auth::user()->name!!}</strong></a>
                                <a class="top-a" href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i><small>Thoát</small></a>
                            @endif
                        </span>
                    </div>

                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#login-modal">Đăng nhập</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/user') }}">Thông tin cá nhân</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif

                    <li class="dropdown">
                        <a href="{!!url('gio-hang')!!}"> <span class="glyphicon glyphicon-shopping-cart"></span> Giỏ
                            Hàng </a>
                    </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mid-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <img src="https://www.cdn.xwatch.vn/wp-content/uploads/2017/03/logo-website-xwatch-6.png" alt="" class="lol-main">
            </div><!-- logo-->
            <div class="col-sm-12 col-md-5 col-lg-5 col-xl-5">
                <form class="navbar-form" role="search">
                    <div class="input-group add-on">
                        <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                        </div>
                    </div>
                </form>
            </div><!-- search-->
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <div class="box-support">
                    <div class="support-address"><a href="" class="whitecolor"><span class="d-block upper redcolor"><i class="fa fa-map-marker"></i> Địa chỉ</span> cửa hàng</a></div>
                    <div class="support-hotline"><span class="d-block upper redcolor"><i class="fa fa-volume-control-phone"></i> Hotline</span> <span class="phone-numbers-inline"><a href="tel:19000325" rel="nofollow" class="gg-phone-conversion">19000325</a></span></div>
                </div>
            </div><!-- help - support-->
        </div>
    </div>
</div>
<!-- main menu  navbar -->

<nav class="navbar navbar-default navbar-top" role="navigation" id="main-Nav"
     style="background-color: #16a085;margin-bottom: 5px;font-size: 13px;">
    <div class="container">
        <div class="row">


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-mav-top">
                <ul class="nav navbar-nav">
                    <li><a href="{!!url('')!!}" title="" style="color: #FFFFFF;background-color: #2c3e50;"><b
                                    class="glyphicon glyphicon-home"></b> Trang chủ </a></li>
                    <li>
                        <a href="{!!url('mobile')!!}">Điện Thoại </a>
                    </li>
                    <li>
                        <a href="{!!url('laptop')!!}"> Laptop </a>
                    </li>
                    <li>
                        <a href="{!!url('pc')!!}"> Máy Tính </a>
                    </li>
                    <li>
                        <a href="{!!url('tin-tuc')!!}"> Tin Tức - Khuyễn Mãi </a>
                    </li>
                </ul>

            </div><!-- /.navbar-collapse -->
        </div> <!-- /row -->
    </div><!-- /container -->
</nav>    <!-- /main nav -->

<!-- left slider bar nav -->
<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times; Đóng</a>
    <a href="{!!url('mobile')!!}">Điện Thoại</a>
    <a href="{!!url('laptop')!!}">Laptop</a>
    <a href="{!!url('pc')!!}">Máy Tính</a>
    <a href="{!!url('tin-tuc')!!}">Tin Tức</a>
    <a href="{!!url('gio-hang')!!}"> <span class="glyphicon glyphicon-shopping-cart"></span> Giỏ Hàng </a>
</div>
<!-- /left slider bar nav -->

{{-- loginform --}}
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"
     style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <h1>Đăng nhập</h1><br>
            <form class="form-horizontal" role="form" method="POST" id="login-form" action="{{ url('/login') }}">
                {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" class="form-control" name="email" placeholder="Nhập địa chỉ Email"
                           value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                    @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <input id="password" type="password" name="password" class="form-control"
                           placeholder="Nhập mật khẩu">
                    @if ($errors->has('password'))
                        <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                    @endif
                </div>
                <div class="form-group">
                    <div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Ghi nhớ
                            </label>
                        </div>
                    </div>
                </div>
                <input type="submit" name="login" class="btn btn-primary" value="Đăng nhập">
            </form>
            <div class="login-help">
                <a class="btn btn-link" href="{!!url('/register')!!}"> <strong style="color:red;"> Đăng ký </strong>
                </a> - <a class="btn btn-link" href="{{ url('/password/reset') }}">Bạn đã quên mật khẩu?</a>
            </div>
        </div>
    </div>
</div>