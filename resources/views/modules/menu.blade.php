<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <p class="welcome-store">Chào mừng đến với hệ thống đồng hồ chính hãng Xwatch!</p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <div class="right-align">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <ul class=" pull-right">

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
                            <li><a href="#" data-toggle="modal" data-target="#login-modal"><span
                                            class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/user') }}">Thông tin cá nhân</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        <li>
                            <a href="{!!url('gio-hang')!!}"> <i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="cart-count"> ({!!Cart::count()!!})</i> Giỏ
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
                <a href="{!!url('/')!!}"><img
                            src="https://www.cdn.xwatch.vn/wp-content/uploads/2017/03/logo-website-xwatch-6.png" alt=""
                            class="lol-main"></a>
            </div><!-- logo-->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">

                <form action="{!! url('tim-kiem') !!}" method="get" id="mainSearch" class="navbar-form" role="search">
                    <div class="input-group add-on frm-input">
                        <input class="form-control" placeholder="Search" name="txtkeyword" id="txtkeyword" type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
                            </button>
                        </div>
                    </div>
                    <div id="resultSuggest" style="display: none;"></div>

                    <div class="suggest-search">
                        <span class="red">Gợi ý từ khóa:</span>
                        <ul>
                            <li><a href="">Đồng hồ nam</a></li>
                            <li><a href="">Đồng hồ nữ</a></li>
                            <li><a href="">Casio</a></li>
                            <li><a href="">orient</a></li>
                            <li><a href="">ogival</a></li>
                        </ul>
                    </div>
                </form>
            </div><!-- search-->
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="box-support">
                    <div class="support-address"><a href="" class="whitecolor"><span class="d-block upper redcolor"><i
                                        class="fa fa-map-marker"></i> Địa chỉ</span> cửa hàng</a></div>
                    <div class="support-hotline"><span class="d-block upper redcolor"><i class="fa fa-phone"></i> Hotline</span>
                        <span class="phone-numbers-inline"><a href="tel:19000325" rel="nofollow"
                                                              class="gg-phone-conversion">19000325</a></span></div>
                </div>
            </div><!-- help - support-->
        </div>
    </div>

    <!-- mega menu -->
    <nav id="mainMenu">
    <div class="container">
        <ul>
            <li class="mn-lv1">
                <div class="cd-dropdown-wrapper" id="dropMenu">
                    <a class="cd-dropdown-trigger a-lv1" href="">Danh mục sản phẩm</a>
                    <nav class="cd-dropdown">
                        <h2>Danh mục đồng hồ</h2>
                        <a href="" class="cd-close">Close</a>
                        <ul class="cd-dropdown-content">
                            <li class="has-children">
                                <a href="">Danh mục đồng hồ</a>

                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="has-children">
                                        <a href="{!!url('dong-ho-nam')!!}">Đồng hồ nam</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('san-pham/dong-ho-nam/casio')!!}">Casio</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-nam/citizen')!!}">Citizen</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-nam/ogival')!!}">Ogival</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-nam/olympianus')!!}">Olym Pianus</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-nam/olympiastar')!!}">Olympia star</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-nam/orient')!!}">Orient</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-nam/seiko')!!}">Seiko</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="{!!url('dong-ho-nu')!!}">Đồng hồ nữ</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('san-pham/dong-ho-nu/casio')!!}">Casio</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-nu/citizen')!!}">Citizen</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-nu/olympiastar')!!}">Olympia star</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-nu/ogival')!!}">Ogival</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="">Đồng hồ đặc biệt</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('san-pham/dong-ho-dac-biet/dong-ho-tu-dat')!!}">Đồng hồ tự đặt</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-dac-biet/dong-ho-khac')!!}">Đồng hồ khác</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="">Các loại đồng hồ khác</a>
                                        <ul class="is-hidden">
                                            <li><a href="">Cardigans</a></li>
                                            <li><a href="">Coats</a></li>
                                            <li><a href="">Polo Shirts</a></li>
                                            <li><a href="">Shirts</a></li>
                                            <li><a href="">Vests</a></li>
                                        </ul>
                                    </li>
                                </ul> <!-- .cd-secondary-dropdown -->
                            </li> <!-- .has-children -->

                            <li class="has-children">
                                <a href="">Đồng hồ phổ biến</a>

                                <ul class="cd-dropdown-gallery is-hidden">
                                    <?php foreach ($new as $row) : ?>
                                    <li>
                                        <a class="cd-dropdown-item" href="{!!url('san-pham/'.$row->id.'-'.$row->slug)!!}">
                                            <img  class="img-responsive menu-img" src="{!!url('/uploads/products/'.$row->images)!!}" alt="{!!$row->name!!}">
                                            <h3>{!!$row->name!!}</h3>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul> <!-- .cd-dropdown-gallery -->
                            </li> <!-- .has-children -->

                            <li class="has-children">
                                <a href="">Services</a>
                                <ul class="cd-dropdown-icons is-hidden">
                                    <li class="go-back"><a href="">Menu</a></li>
                                    <li class="see-all"><a href="">Browse Services</a></li>
                                    <li>
                                        <a class="cd-dropdown-item item-1" href="">
                                            <h3>Service #1</h3>
                                            <p>This is the item description</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item item-2" href="">
                                            <h3>Service #2</h3>
                                            <p>This is the item description</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item item-3" href="">
                                            <h3>Service #3</h3>
                                            <p>This is the item description</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item item-4" href="">
                                            <h3>Service #4</h3>
                                            <p>This is the item description</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item item-5" href="">
                                            <h3>Service #5</h3>
                                            <p>This is the item description</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item item-6" href="">
                                            <h3>Service #6</h3>
                                            <p>This is the item description</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item item-7" href="">
                                            <h3>Service #7</h3>
                                            <p>This is the item description</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item item-8" href="">
                                            <h3>Service #8</h3>
                                            <p>This is the item description</p>
                                        </a>
                                    </li>

                                </ul> <!-- .cd-dropdown-icons -->
                            </li> <!-- .has-children -->

                            <li class="cd-divider">Divider</li>

                            <li><a href="">Page 1</a></li>
                            <li><a href="">Page 2</a></li>
                        </ul> <!-- .cd-dropdown-content -->
                    </nav> <!-- .cd-dropdown -->
                </div> <!-- .cd-dropdown-wrapper -->
            </li>

            <li class="{!! set_active('dong-ho-nam') !!} mn-lv1 mt-20">
                <a class="a-lv1" href="{!!url('dong-ho-nam')!!}">Đồng hồ nam </a>
            </li>

            <li class="dropdown {!! set_active('dong-ho-nu') !!} {!! set_active('dong-ho-nu/casio') !!} {!! set_active('dong-ho-nu/olympia-star') !!} mn-lv1 mt-20">
                <a class="a-lv1" href="{!!url('dong-ho-nu')!!}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Đồng hồ nữ <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{!!url('san-pham/dong-ho-nu/casio')!!}">Casio</a></li>
                    <li><a href="{!!url('san-pham/dong-ho-nu/olympia-star')!!}">Olympia star</a></li>
                </ul>
            </li>
            <li class="{!! set_active('pc') !!} mn-lv1 mt-20">
                <a class="a-lv1" href="{!!url('pc')!!}" > Đồng hồ Thụy Sĩ </a>
            </li>
            <li class="dropdown mn-lv1 mt-20">
                <a class="a-lv1" href="" class="dropdown-toggle" data-toggle="dropdown" role="button"
                   aria-expanded="false">Kiến thức đồng hồ <span class="caret"></span></a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Video Xchannel</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
            <li class="{!! set_active('tin-tuc') !!} mn-lv1 mt-20">
                <a class="a-lv1" href="{!!url('tin-tuc')!!}"> Về Xwatch </a>
            </li>
            <li class="{!! set_active('lien-he') !!} mn-lv1 mt-20">
                <a class="a-lv1" href="{!!url('lien-he')!!}"> Liên hệ </a>
            </li>

        </ul>
    </div>
    </nav>
    <!-- end mega menu -->

</div>
<!-- main menu  navbar -->


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