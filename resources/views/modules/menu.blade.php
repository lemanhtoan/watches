<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1788954788044511";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <p class="welcome-store">Chào mừng đến với hệ thống đồng hồ chính hãng Xwatch!</p>
            </div>
            <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6 col-xl-6">
                <div class="right-align">
                    <ul class=" pull-right">
                        @if (Auth::guest())
                            <li><a href="#" data-toggle="modal" data-target="#login-modal"><span
                                            class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
                            <li><a href="#" data-toggle="modal" data-target="#login-modal"> Đăng ký</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{ url('/user') }}">Thông tin cá nhân</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Thoát</a>
                                    </li>
                                </ul>
                            </li>
                        @endif

                        <li>
                            <a href="{!!url('gio-hang')!!}" title="Giỏ hàng" alt="Giỏ hàng" > <i class="fa fa-shopping-cart"></i> </a>
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
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 logo-box">
                <a href="{!!url('/')!!}"><img
                            src="{!!url('/public/images/logo.png')!!}" alt=""
                            class="lol-main"></a>
            </div><!-- logo-->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">

                <form action="{!! url('tim-kiem') !!}" method="get" id="mainSearch">
                    <div class="input-group add-on frm-input">
                        <input class="form-control" placeholder="Nhập từ khóa tìm kiếm" name="txtkeyword" id="txtkeyword" type="text">
                        <div class="input-group-btn">
                            <button id="submitSearch" class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i>
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
                            <li><a href="">Orient</a></li>
                            <li><a href="">Ogival</a></li>
                        </ul>
                    </div>
                </form>
            </div><!-- search-->
            <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
                <div class="box-support">
                    <div class="support-address"><a href="{!!url('lien-he')!!}" class="whitecolor"><span class="d-block upper redcolor"><i
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
            <li class="mn-lv1 aRoot">
                <div class="cd-dropdown-wrapper" id="dropMenu">
                    <a id="aRoot" class="cd-dropdown-trigger a-lv1" href=""><i class="fa fa-bars"></i>Danh mục sản phẩm</a>
                    <nav id="navRoot" class="cd-dropdown">
                        <a href="" class="cd-close">Close</a>
                        <ul class="cd-dropdown-content">
                            <li class="dr-l1 has-children">
                                <i class="fa fa-circle"></i>
                                <a href="">Danh mục đồng hồ</a>

                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="has-children">
                                        <a class="a-title" href="{!!url('dong-ho-nam')!!}">Đồng hồ nam</a>
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
                                        <a  class="a-title" href="{!!url('dong-ho-nu')!!}">Đồng hồ nữ</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('san-pham/dong-ho-nu/casio')!!}">Casio</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-nu/citizen')!!}">Citizen</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-nu/olympiastar')!!}">Olympia star</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-nu/ogival')!!}">Ogival</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a  class="a-title" href="">Đồng hồ đặc biệt</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('san-pham/dong-ho-dac-biet/dong-ho-tu-dat')!!}">Đồng hồ tự đặt</a></li>
                                            <li><a href="{!!url('san-pham/dong-ho-dac-biet/dong-ho-khac')!!}">Đồng hồ khác</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a  class="a-title" href="">Các loại đồng hồ khác</a>
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

                            <li class="dr-l1 has-children">
                                <i class="fa fa-circle"></i>
                                <a href="">Đồng hồ phổ biến</a>

                                <ul class="cd-dropdown-gallery is-hidden">
                                    <?php foreach ($new as $row) : ?>
                                    <?php
                                        $rowArr = (array) $row;
                                        if (array_key_exists("pro_id", $rowArr)) {
                                            $proId = $rowArr['pro_id'];
                                        } else {
                                            $proId = $rowArr['id'];
                                        }
                                    ?>
                                    <li>
                                        <a class="cd-dropdown-item" href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">
                                            <img  class="img-responsive menu-img" src="{!!url('/uploads/products/'.$row->images)!!}" alt="{!!$row->name!!}">
                                            <h3>{!!$row->name!!}</h3>
                                        </a>
                                    </li>
                                    <?php endforeach; ?>
                                </ul> <!-- .cd-dropdown-gallery -->
                            </li> <!-- .has-children -->

                            <li class="dr-l1 has-children">
                                <i class="fa fa-circle"></i>
                                <a href="">Sản phẩm khuyến mãi</a>
                                <ul class="cd-dropdown-icons is-hidden">
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


                            <li class="dr-l1"><i class="fa fa-circle"></i><a href="{!!url('tat-ca')!!}">Tất cả sản phẩm</a></li>

                            <!-- list item main with mobile -->
                            <li class="visible-xs visible-sm "><a class="" href="{!!url('dong-ho-nam')!!}">Đồng hồ nam </a></li>
                            <li class="visible-xs visible-sm "><a class="" href="{!!url('dong-ho-nu')!!}" > Đồng hồ nữ </a></li>
                            <li class="visible-xs visible-sm "><a class="" href="{!!url('dong-ho-thuy-si')!!}" > Đồng hồ Thụy Sĩ </a></li>
                            <li class="visible-xs visible-sm "><a class="" href="">Kiến thức đồng hồ </a></li>
                            <li class="visible-xs visible-sm "><a class="" href="{!!url('tin-tuc')!!}"> Về Xwatch </a></li>
                            <li class="visible-xs visible-sm "><a class="" href="{!!url('lien-he')!!}"> Liên hệ </a></li>
                        </ul> <!-- .cd-dropdown-content -->
                    </nav> <!-- .cd-dropdown -->
                </div> <!-- .cd-dropdown-wrapper -->
            </li>

            <li class="{!! set_active('dong-ho-nam') !!} mn-lv1 mt-20 hidden-xs hidden-sm ">
                <a class="a-lv1" href="{!!url('dong-ho-nam')!!}">Đồng hồ nam </a>
            </li>

            <li class="dropdown {!! set_active('dong-ho-nu') !!} {!! set_active('dong-ho-nu/casio') !!} {!! set_active('dong-ho-nu/olympia-star') !!} mn-lv1 mt-20 hidden-xs hidden-sm">
                <a class="a-lv1" href="{!!url('dong-ho-nu')!!}" > Đồng hồ nữ</a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="{!!url('san-pham/dong-ho-nu/casio')!!}">Casio</a></li>
                    <li><a href="{!!url('san-pham/dong-ho-nu/olympia-star')!!}">Olympia star</a></li>
                </ul>
            </li>
            <li class="{!! set_active('dong-ho-thuy-si') !!} mn-lv1 mt-20 hidden-xs hidden-sm">
                <a class="a-lv1" href="{!!url('dong-ho-thuy-si')!!}" > Đồng hồ Thụy Sĩ </a>
            </li>
            <li class="dropdown mn-lv1 mt-20 hidden-xs hidden-sm">
                <a class="a-lv1" href="">Kiến thức đồng hồ</a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Video Xchannel</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </li>
            <li class="{!! set_active('tin-tuc') !!} mn-lv1 mt-20 hidden-xs hidden-sm">
                <a class="a-lv1" href="{!!url('tin-tuc')!!}"> Về Xwatch </a>
            </li>
            <li class="{!! set_active('lien-he') !!} mn-lv1 mt-20 hidden-xs hidden-sm">
                <a class="a-lv1" href="{!!url('lien-he')!!}"> Liên hệ </a>
            </li>

        </ul>
    </div>
    </nav>
    <!-- end mega menu -->

</div>
<!-- main menu  navbar -->


{{-- loginform --}}
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="loginmodal-container">
            <div class="text-center-home">Đăng nhập
                  <hr>
            </div>
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

                <input type="submit" name="login" class="btn btn-primary btn-login" value="Đăng nhập">
            </form>
            <div class="login-help">
                <a class="btn btn-link" href="{!!url('/register')!!}"> <strong style="color:red;"> Đăng ký </strong>
                </a> - <a class="btn btn-link" href="{{ url('/password/reset') }}">Bạn đã quên mật khẩu?</a>
            </div>
        </div>
    </div>
</div>