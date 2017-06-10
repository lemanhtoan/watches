<?php 
 $logo = DB::table('settings')->where('name', 'logo')->select('content')->get()[0];
 $welcome = DB::table('settings')->where('name', 'welcome')->select('content')->get()[0];
 $hotline = DB::table('settings')->where('name', 'hotline')->select('content')->get()[0];
?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.9&appId=1788954788044511";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>

<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <p class="welcome-store"><?php echo $welcome->content; ?></p>
            </div>
            <div class="col-xs-12 col-sm-6  col-md-6 col-lg-6 col-xl-6">
                <div class="right-align">
                    <ul class=" pull-right">
                        @if (Auth::guest())
                            <li><a href="#" data-toggle="modal" data-target="#login-modal"><span class="glyphicon glyphicon-user"></span> Đăng nhập</a></li>
                            <li><a href="{!!url('/register')!!}"> Đăng ký</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu logged" role="menu">
                                    <li><a href="{{ url('/user') }}">Thông tin cá nhân</a></li>
                                    <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Thoát</a></li>
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
                <a href="{!!url('/')!!}">
                   <img src="{!!url('/uploads/commons/'.$logo->content)!!}" class="lol-main">
                </a>
            </div><!-- logo-->
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">

                <form action="{!! url('tim-kiem') !!}" method="get" id="mainSearch">
                    <div class="input-group add-on frm-input">
                        <input class="form-control" placeholder="Nhập từ khóa tìm kiếm" name="txtkeyword" id="txtkeyword" type="text">
                        <div class="input-group-btn">
                            <button id="submitSearch" class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
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
                        <span class="phone-numbers-inline"><a href="tel:<?php echo  $hotline->content;?>" rel="nofollow" class="gg-phone-conversion"><?php echo  $hotline->content;?></a></span></div>
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
                                <a href="">Đồng hồ phổ biến</a>

                                <ul class="cd-dropdown-gallery is-hidden">
                                    <?php $count=1; foreach ($new as $row) { ?>
                                    <?php
                                        $rowArr = (array) $row;
                                        if (array_key_exists("pro_id", $rowArr)) {
                                            $proId = $rowArr['pro_id'];
                                        } else {
                                            $proId = $rowArr['id'];
                                        }
                                        if ($count%4 == 1)
                                      {  
                                           echo "<div class='row'>";
                                      }
                                    ?>
                                    <li class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                        <a class="cd-dropdown-item" href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">
                                            <img  class="img-responsive menu-img" src="{!!url('/uploads/products/'.$row->images)!!}">
                                            <h3>{!!$row->name!!}</h3>
                                        </a>
                                    </li>
                                    <?php 
                                      if ($count%4 == 0)
                                        {
                                            echo "</div>";
                                        }
                                        $count++;
                                      ?>
                                      <?php } ?>
                                      <?php if ($count%4 != 1) echo "</div>"; ?>
                                </ul> <!-- .cd-dropdown-gallery -->
                            </li> <!-- .has-children -->

                            <li class="dr-l1 has-children">
                                <i class="fa fa-circle"></i>
                                <a href="{!!url('olym')!!}">Đồng hồ OP</a>
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="has-children">
                                        <a class="a-title" href="">Đồng hồ Olym Pianus</a>
                                        <ul class="is-hidden">
                                            <li class="mt-5"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Theo Khoảng Giá</li>
                                            <li><a href="{!!url('cate/olym-pianus/price/0')!!}">Dưới 2 triệu đồng</a></li>
                                            <li><a href="{!!url('cate/olym-pianus/price/2')!!}">Từ 2 – 4 triệu đồng</a></li>
                                            <li><a href="{!!url('cate/olym-pianus/price/4')!!}">Từ 4 – 6 triệu đồng</a></li>

                                            <li class="mt-5"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Theo chất liệu dây</li>
                                            <li><a href="{!!url('cate/olym-pianus/chatlieu/3')!!}">Đồng hồ dây kim loại</a></li>
                                            <li><a href="{!!url('cate/olym-pianus/chatlieu/2')!!}">Đồng hồ dây da</a></li>

                                            <li class="mt-5"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Theo máy</li>
                                            <li><a href="{!!url('cate/olym-pianus/kieumay/3')!!}">Đồng hồ cơ</a></li>
                                            <li><a href="{!!url('cate/olym-pianus/kieumay/4')!!}">Đồng hồ Quartz</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a class="a-title" href="">Đồng hồ Olympia Star</a>
                                        <ul class="is-hidden">
                                            <li class="mt-5"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Theo Khoảng Giá</li>
                                            <li><a href="{!!url('cate/olympia-star/price/2')!!}">Từ 2 – 4 triệu đồng</a></li>
                                            <li><a href="{!!url('cate/olympia-star/price/4')!!}">Từ 4 – 6 triệu đồng</a></li>

                                            <li class="mt-5"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Theo chất liệu dây</li>
                                            <li><a href="{!!url('cate/olympia-star/chatlieu/3')!!}">Đồng hồ dây kim loại</a></li>
                                            <li><a href="{!!url('cate/olympia-star/chatlieu/2')!!}">Đồng hồ dây da</a></li>
                                        </ul>
                                    </li>
                                </ul> <!-- .cd-dropdown-icons -->
                            </li> <!-- .has-children -->

                            <li class="dr-l1 has-children">
                                <i class="fa fa-circle"></i>
                                <a href="{!!url('orient')!!}">Đồng hồ Orient</a>
                                <ul class="cd-secondary-dropdown is-hidden is3col">
                                    <li class="has-children">
                                        <a class="a-title" href="">Theo máy</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/orient/kieumay/3')!!}">Đồng hồ cơ</a></li>
                                            <li><a href="{!!url('cate/orient/kieumay/4')!!}">Đồng hồ Quartz</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a class="a-title" href="">Theo Khoảng Giá</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/orient/price/2')!!}">Từ 2 – 4 triệu đồng</a></li>
                                            <li><a href="{!!url('cate/orient/price/4')!!}">Từ 4 – 6 triệu đồng</a></li>
                                            <li><a href="{!!url('cate/orient/price/6')!!}">Từ 6 – 9 triệu</a></li>
                                            <li><a href="{!!url('cate/orient/price/15x')!!}">Trên 15 triệu đồng</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a class="a-title" href="">Theo chất liệu dây</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/orient/chatlieu/3')!!}">Đồng hồ nam dây kim loại</a></li>
                                            <li><a href="{!!url('cate/orient/chatlieu/2')!!}">Đồng hồ nam dây da</a></li>
                                        </ul>
                                    </li>
                                </ul> <!-- .cd-dropdown-icons -->
                            </li> <!-- .has-children -->

                            <li class="dr-l1 has-children">
                                <i class="fa fa-circle"></i>
                                <a href="{!!url('citizen')!!}">Đồng hồ Citizen</a>
                                <ul class="cd-secondary-dropdown is-hidden is3col">
                                    <li class="has-children">
                                        <a class="a-title" href="">Theo máy</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/citizen/kieumay/4')!!}">Đồng hồ Quartz</a></li>
                                            <li><a href="{!!url('cate/citizen/kieumay/1')!!}">Đồng hồ Eco – Drive</a></li>
                                            <li><a href="{!!url('cate/citizen/kieumay/3')!!}">Đồng hồ cơ</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a class="a-title" href="">Theo Khoảng Giá</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/citizen/price/2')!!}">Từ 2 – 4 triệu đồng</a></li>
                                            <li><a href="{!!url('cate/citizen/price/4')!!}">Từ 4 – 6 triệu đồng</a></li>
                                            <li><a href="{!!url('cate/citizen/price/6')!!}">Từ 6 – 9 triệu</a></li>
                                            <li><a href="{!!url('cate/citizen/price/15x')!!}">Trên 15 triệu đồng</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a class="a-title" href="">Theo chất liệu dây</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/citizen/chatlieu/3')!!}">Đồng hồ nam dây kim loại</a></li>
                                            <li><a href="{!!url('cate/citizen/chatlieu/2')!!}">Đồng hồ nam dây da</a></li>
                                        </ul>
                                    </li>
                                </ul> <!-- .cd-dropdown-icons -->
                            </li> <!-- .has-children -->

                            <li class="dr-l1 has-children">
                                <i class="fa fa-circle"></i>
                                <a href="{!!url('ogival')!!}">Đồng hồ Ogival</a>
                                <ul class="cd-secondary-dropdown is-hidden is3col">
                                    <li class="has-children">
                                        <a class="a-title" href="">Theo máy</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/ogival/kieumay/4')!!}">Đồng hồ Quartz</a></li>
                                            <li><a href="{!!url('cate/ogival/kieumay/3')!!}">Đồng hồ cơ</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a class="a-title" href="">Theo Khoảng Giá</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/ogival/price/4')!!}">Từ 4 – 6 triệu đồng</a></li>
                                            <li><a href="{!!url('cate/ogival/price/6')!!}">Từ 6 – 9 triệu</a></li>
                                            <li><a href="{!!url('cate/ogival/price/15x')!!}">Trên 15 triệu đồng</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a class="a-title" href="">Theo chất liệu dây</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/ogival/chatlieu/3')!!}">Đồng hồ nam dây kim loại</a></li>
                                            <li><a href="{!!url('cate/ogival/chatlieu/2')!!}">Đồng hồ nam dây da</a></li>
                                        </ul>
                                    </li>
                                </ul> <!-- .cd-dropdown-icons -->
                            </li> <!-- .has-children -->

                            <li class="dr-l1 has-children">
                                <i class="fa fa-circle"></i>
                                <a href="{!!url('casio')!!}">Đồng hồ Casio</a>
                                <ul class="cd-secondary-dropdown is-hidden is3col">
                                    <li class="has-children">
                                        <a class="a-title" href="">Theo Loại</a>
                                        <ul class="is-hidden">
                                            <li><a class="a-title" href="">Đồng hồ G-shock</a></li>
                                            <li><a class="a-title" href="">Đồng hồ Casio Edifice</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-children">
                                        <a class="a-title" href="">Theo Khoảng Giá</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/casio/price/0')!!}">Dưới 2 triệu đồng</a></li>
                                            <li><a href="{!!url('cate/casio/price/2')!!}">Từ 2 – 4 triệu đồng</a></li>
                                            <li><a href="{!!url('cate/casio/price/4')!!}">Từ 4 – 6 triệu đồng</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a class="a-title" href="">Theo chất liệu dây</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/casio/chatlieu/2')!!}">Đồng hồ dây da</a></li>
                                            <li><a href="{!!url('cate/casio/chatlieu/1')!!}">Đồng hồ dây cao su</a></li>
                                            <li><a href="{!!url('cate/casio/chatlieu/3')!!}">Đồng hồ dây kim loại</a></li>
                                        </ul>
                                    </li>
                                </ul> <!-- .cd-dropdown-icons -->
                            </li> <!-- .has-children -->

                            <li class="dr-l1 has-children">
                                <i class="fa fa-circle"></i>
                                <a href="{!!url('seiko')!!}">Đồng hồ Seiko</a>
                                <ul class="cd-secondary-dropdown is-hidden">
                                    <li class="has-children">
                                        <a class="a-title" href="">Theo máy</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/seiko/kieumay/4')!!}">Đồng hồ Quartz</a></li>
                                            <li><a href="{!!url('cate/seiko/kieumay/3')!!}">Đồng hồ cơ</a></li>
                                        </ul>
                                    </li>

                                    <li class="has-children">
                                        <a class="a-title" href="">Theo Kinetic</a>
                                        <ul class="is-hidden">
                                            <li><a href="{!!url('cate/seiko/kieumay/2')!!}">Đồng hồ Kinetic</a></li>
                                        </ul>
                                    </li>
                                </ul> <!-- .cd-dropdown-icons -->
                            </li> <!-- .has-children -->

                            <li class="dr-l1"><i class="fa fa-circle"></i><a href="{!!url('tat-ca')!!}">Tất cả sản phẩm</a></li>

                            <!-- list item main with mobile -->
                            <li class="visible-xs visible-sm "><a class="" href="{!!url('dong-ho-nam')!!}">Đồng hồ nam </a></li>
                            <li class="visible-xs visible-sm "><a class="" href="{!!url('dong-ho-nu')!!}" > Đồng hồ nữ </a></li>
                            <li class="visible-xs visible-sm "><a class="" href="{!!url('dong-ho-thuy-si')!!}" > Đồng hồ Thụy Sĩ </a></li>

                            <li class="visible-xs visible-sm "><a class="" href="{!!url('tintuc/2')!!}">Kiến thức đồng hồ </a></li>

                        <li class="visible-xs visible-sm "><a href="{!!url('tintuc/1')!!}">Thẩm định đồng hồ</a></li>
                        <li class="visible-xs visible-sm "><a href="{!!url('tintuc/7')!!}">Video Xchannel</a></li>
                        <li class="visible-xs visible-sm "><a href="{!!url('tintuc/8')!!}">Phân biệt đồng hồ thật, giả</a></li>
                        <li class="visible-xs visible-sm "><a href="{!!url('tintuc/9')!!}">Dành cho người mới bắt đầu</a></li>
                        <li class="visible-xs visible-sm "><a href="{!!url('tintuc/3')!!}">Kinh nghiệm mua hàng</a></li>
                        <li class="visible-xs visible-sm "><a href="{!!url('tintuc/6')!!}">Kiến thức chuyên ngành</a></li>
                        <li class="visible-xs visible-sm "><a class="a-lv1" href="{!!url('tintuc/11')!!}"> Về Xwatch </a></li>

                        <li class="visible-xs visible-sm "><a href="{!!url('tintuc/5')!!}">Giới thiệu về Xwatch</a></li>
                        <li class="visible-xs visible-sm "><a href="{!!url('tintuc/10')!!}">Triết lý kinh doanh</a></li>
                        <li class="visible-xs visible-sm "><a href="{!!url('tintuc/4')!!}">Chính sách bảo hành</a></li>
                            <li class="visible-xs visible-sm "><a class="" href="{!!url('lien-he')!!}"> Liên hệ </a></li>
                        </ul> <!-- .cd-dropdown-content -->
                    </nav> <!-- .cd-dropdown -->
                </div> <!-- .cd-dropdown-wrapper -->
            </li>

            <li class="{!! set_active('dong-ho-nam') !!} mn-lv1 mt-20 hidden-xs hidden-sm ">
                <a class="a-lv1" href="{!!url('dong-ho-nam')!!}">Đồng hồ nam </a>
            </li>

            <li class="{!! set_active('dong-ho-nu') !!} mn-lv1 mt-20 hidden-xs hidden-sm ">
                <a class="a-lv1" href="{!!url('dong-ho-nu')!!}">Đồng hồ NỮ </a>
            </li>

            <li class="{!! set_active('dong-ho-thuy-si') !!} mn-lv1 mt-20 hidden-xs hidden-sm">
                <a class="a-lv1" href="{!!url('dong-ho-thuy-si')!!}" > Đồng hồ Thụy Sĩ </a>
            </li>
            <li class="dropdown mn-lv1 mt-20 hidden-xs hidden-sm">
                <a class="a-lv1" href="{!!url('tintuc/2')!!}">Kiến thức đồng hồ</a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{!!url('tintuc/1')!!}">Thẩm định đồng hồ</a></li>
                    <li><a href="{!!url('tintuc/7')!!}">Video Xchannel</a></li>
                    <li><a href="{!!url('tintuc/8')!!}">Phân biệt đồng hồ thật, giả</a></li>
                    <li><a href="{!!url('tintuc/9')!!}">Dành cho người mới bắt đầu</a></li>
                    <li><a href="{!!url('tintuc/3')!!}">Kinh nghiệm mua hàng</a></li>
                    <li><a href="{!!url('tintuc/6')!!}">Kiến thức chuyên ngành</a></li>
                </ul>
            </li>
            <li class="dropdown  mn-lv1 mt-20 hidden-xs hidden-sm">
                <a class="a-lv1" href="{!!url('tintuc/11')!!}"> Về Xwatch </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{!!url('tintuc/5')!!}">Giới thiệu về Xwatch</a></li>
                    <li><a href="{!!url('tintuc/10')!!}">Triết lý kinh doanh</a></li>
                    <li><a href="{!!url('tintuc/4')!!}">Chính sách bảo hành</a></li>
                </ul>
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
            <button type="button" class="close" data-dismiss="modal">&times;</button>
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
                <div class="form-group"><input type="submit" name="login" class="btn btn-primary btn-login" value="Đăng nhập"></div>

            </form>
            <div class="login-help">
                <a class="btn btn-link" href="{!!url('/register')!!}"> <strong style="color:red;"> Đăng ký </strong>
                </a> - <a class="btn btn-link" href="{{ url('/password/reset') }}">Bạn đã quên mật khẩu?</a>
            </div>
        </div>
    </div>
</div>