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

    <nav style="display: none" class="navbar navbar-default" id="megaMenu">

        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>


            <div class="collapse navbar-collapse js-navbar-collapse">
                <ul class="nav navbar-nav">
                    <li id="toogleDropdown" class="dropdown mega-dropdown mn-lv1">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bars"></i> Danh mục
                            sản phẩm</a>

                        <ul class="dropdown-menu mega-dropdown-menu row">
                            <li class="col-sm-15">
                                <ul>
                                    <li class="dropdown-header">New in Stores</li>
                                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <a href="#"><img
                                                            src="http://placehold.it/254x150/3498db/f5f5f5/&text=New+Collection"
                                                            class="img-responsive" alt="product 1"></a>
                                                <h4>
                                                    <small>Summer dress floral prints</small>
                                                </h4>
                                                <button class="btn btn-primary" type="button">49,99 €</button>
                                                <button href="#" class="btn btn-default" type="button"><span
                                                            class="glyphicon glyphicon-heart"></span> Add to Wishlist
                                                </button>
                                            </div>
                                            <!-- End Item -->
                                            <div class="item">
                                                <a href="#"><img
                                                            src="http://placehold.it/254x150/ef5e55/f5f5f5/&text=New+Collection"
                                                            class="img-responsive" alt="product 2"></a>
                                                <h4>
                                                    <small>Gold sandals with shiny touch</small>
                                                </h4>
                                                <button class="btn btn-primary" type="button">9,99 €</button>
                                                <button href="#" class="btn btn-default" type="button"><span
                                                            class="glyphicon glyphicon-heart"></span> Add to Wishlist
                                                </button>
                                            </div>
                                            <!-- End Item -->
                                            <div class="item">
                                                <a href="#"><img
                                                            src="http://placehold.it/254x150/2ecc71/f5f5f5/&text=New+Collection"
                                                            class="img-responsive" alt="product 3"></a>
                                                <h4>
                                                    <small>Denin jacket stamped</small>
                                                </h4>
                                                <button class="btn btn-primary" type="button">49,99 €</button>
                                                <button href="#" class="btn btn-default" type="button"><span
                                                            class="glyphicon glyphicon-heart"></span> Add to Wishlist
                                                </button>
                                            </div>
                                            <!-- End Item -->
                                        </div>
                                        <!-- End Carousel Inner -->
                                    </div>
                                    <!-- /.carousel -->
                                    <li class="divider"></li>
                                    <li><a href="#">View all Collection <span
                                                    class="glyphicon glyphicon-chevron-right pull-right"></span></a>
                                    </li>
                                </ul>
                            </li>
                            <li class="col-sm-15">
                                <ul>
                                    <li class="dropdown-header">Dresses</li>
                                    <li><a href="#">Unique Features</a></li>
                                    <li><a href="#">Image Responsive</a></li>
                                    <li><a href="#">Auto Carousel</a></li>
                                    <li><a href="#">Newsletter Form</a></li>
                                    <li><a href="#">Four columns</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Tops</li>
                                    <li><a href="#">Good Typography</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-15">
                                <ul>
                                    <li class="dropdown-header">Jackets</li>
                                    <li><a href="#">Easy to customize</a></li>
                                    <li><a href="#">Glyphicons</a></li>
                                    <li><a href="#">Pull Right Elements</a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Pants</li>
                                    <li><a href="#">Coloured Headers</a></li>
                                    <li><a href="#">Primary Buttons & Default</a></li>
                                    <li><a href="#">Calls to action</a></li>
                                </ul>
                            </li>
                            <li class="col-sm-15">
                                <ul>
                                    <li class="dropdown-header">Accessories</li>
                                    <li><a href="#">Default Navbar</a></li>
                                    <li><a href="#">Lovely Fonts</a></li>
                                    <li><a href="#">Responsive Dropdown </a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Newsletter</li>
                                    <form class="form" role="form">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">Email address</label>
                                            <input type="email" class="form-control" id="email"
                                                   placeholder="Enter email">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </form>
                                </ul>
                            </li>

                            <li class="col-sm-15">
                                <ul>
                                    <li class="dropdown-header">Accessories</li>
                                    <li><a href="#">Default Navbar</a></li>
                                    <li><a href="#">Lovely Fonts</a></li>
                                    <li><a href="#">Responsive Dropdown </a></li>
                                    <li class="divider"></li>
                                    <li class="dropdown-header">Newsletter</li>
                                    <form class="form" role="form">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">Email address</label>
                                            <input type="email" class="form-control" id="email"
                                                   placeholder="Enter email">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                    </form>
                                </ul>
                            </li>
                        </ul>

                    </li>

                    <li class="{!! set_active('dong-ho-nam') !!} mn-lv1">
                        <a href="{!!url('dong-ho-nam')!!}">Đồng hồ nam </a>
                    </li>

                    <li class="{!! set_active('laptop') !!} mn-lv1">
                        <a href="{!!url('laptop')!!}"> Đồng hồ Thụy Sĩ </a>
                    </li>
                    <li class="{!! set_active('pc') !!} mn-lv1">
                        <a href="{!!url('pc')!!}"> Video Xchannel </a>
                    </li>
                    <li class="dropdown mn-lv1">
                        <a href="{!!url('tin-tuc')!!}" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">Kiến thức đồng hồ <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="{!!url('tin-tuc')!!}"> Về Xwatch </a>
                    </li>
                    <li>
                        <a href="{!!url('tin-tuc')!!}"> Liên hệ </a>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>

                </ul>

            </div>
            <!-- /.nav-collapse -->

        </div>

    </nav>

    <div class="container">
        <nav id="mainMenu">
        <ul>
            <li class="mn-lv1">
                <div class="cd-dropdown-wrapper">
                    <a class="cd-dropdown-trigger a-lv1" href="">Danh mục sản phẩm</a>
                    <nav class="cd-dropdown">
                        <h2>Title</h2>
                        <a href="" class="cd-close">Close</a>
                        <ul class="cd-dropdown-content">
                            <li class="has-children">
                                <a href="">Clothing</a>

                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="go-back"><a href="">Menu</a></li>
                                    <li class="see-all"><a href="">All Clothing</a></li>
                                    <li class="has-children">
                                        <a href="">Accessories</a>

                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="">Clothing</a></li>
                                            <li class="see-all"><a href="">All Accessories</a></li>
                                            <li><a href="">Glasses</a></li>
                                            <li><a href="">Gloves</a></li>
                                            <li><a href="">Jewellery</a></li>
                                            <li><a href="">Scarves</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="">Bottoms</a>

                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="">Clothing</a></li>
                                            <li class="see-all"><a href="">All Bottoms</a></li>
                                            <li><a href="">Casual Trousers</a></li>
                                            <li><a href="">Leggings</a></li>
                                            <li><a href="">Shorts</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="">Jackets</a>

                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="">Clothing</a></li>
                                            <li class="see-all"><a href="">All Jackets</a></li>
                                            <li><a href="">Blazers</a></li>
                                            <li><a href="">Bomber jackets</a></li>
                                            <li><a href="">Denim Jackets</a></li>
                                            <li><a href="">Duffle Coats</a></li>
                                            <li><a href="">Leather Jackets</a></li>
                                            <li><a href="">Parkas</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a href="">Tops</a>

                                        <ul class="is-hidden">
                                            <li class="go-back"><a href="">Clothing</a></li>
                                            <li class="see-all"><a href="">All Tops</a></li>
                                            <li><a href="">Cardigans</a></li>
                                            <li><a href="">Coats</a></li>
                                            <li><a href="">Polo Shirts</a></li>
                                            <li><a href="">Shirts</a></li>
                                            <li class="has-children">
                                                <a href="">T-Shirts</a>

                                                <ul class="is-hidden">
                                                    <li class="go-back"><a href="">Tops</a></li>
                                                    <li class="see-all"><a href="">All T-shirts</a></li>
                                                    <li><a href="">Plain</a></li>
                                                    <li><a href="">Print</a></li>
                                                    <li><a href="">Striped</a></li>
                                                    <li><a href="">Long sleeved</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="">Vests</a></li>
                                        </ul>
                                    </li>
                                </ul> <!-- .cd-secondary-dropdown -->
                            </li> <!-- .has-children -->

                            <li class="has-children">
                                <a href="">Gallery</a>

                                <ul class="cd-dropdown-gallery is-hidden">
                                    <li class="go-back"><a href="">Menu</a></li>
                                    <li class="see-all"><a href="">Browse Gallery</a></li>
                                    <li>
                                        <a class="cd-dropdown-item" href="">
                                            <img src="img/img.png" alt="Product Image">
                                            <h3>Product #1</h3>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item" href="">
                                            <img src="img/img.png" alt="Product Image">
                                            <h3>Product #2</h3>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item" href="">
                                            <img src="img/img.png" alt="Product Image">
                                            <h3>Product #3</h3>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item" href="">
                                            <img src="img/img.png" alt="Product Image">
                                            <h3>Product #4</h3>
                                        </a>
                                    </li>
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

                                    <li>
                                        <a class="cd-dropdown-item item-9" href="">
                                            <h3>Service #9</h3>
                                            <p>This is the item description</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item item-10" href="">
                                            <h3>Service #10</h3>
                                            <p>This is the item description</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item item-11" href="">
                                            <h3>Service #11</h3>
                                            <p>This is the item description</p>
                                        </a>
                                    </li>

                                    <li>
                                        <a class="cd-dropdown-item item-12" href="">
                                            <h3>Service #12</h3>
                                            <p>This is the item description</p>
                                        </a>
                                    </li>

                                </ul> <!-- .cd-dropdown-icons -->
                            </li> <!-- .has-children -->

                            <li class="cd-divider">Divider</li>

                            <li><a href="">Page 1</a></li>
                            <li><a href="">Page 2</a></li>
                            <li><a href="">Page 3</a></li>
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
    </nav>
    </div>
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