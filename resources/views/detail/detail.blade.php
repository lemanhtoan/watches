@extends('layouts.special')
@section('content')
    <div class="product-page">
    <div class="row">
        <h3 class="panel-title tbreadcrumb">
            <a href="{!!url('/')!!}" title=""> <i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
            <i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="#"
                                                                                                title="">{!!$slug!!}</a>
        </h3>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 box-img-galary">
            <!-- image and gallery -->
            <div class="img-media-box">
                <img class="img-responsive " src="{!!url('/uploads/products/'.$data->images)!!}" alt="img responsive">
            </div>
            <div class="img-slider">
                <ul id="owl-detailpro" class="owl-carousel owl-theme owl-listChoise">
                    <?php $i = 0; foreach($data->detail_img as $row) : $i++; ?>

                    <li class="mediaSelected" data-toggle="modal" data-target="#detailImageModal"
                        data-slide-to="<?php echo $i; ?>">
                        <a href="#proDetailGallery" data-slide-to="<?php echo $i; ?>"><img alt="{!!$data->name!!}"
                                                                                           class="img-thumbnail"
                                                                                           src="{!!url('/uploads/products/details/'.$row->images_url)!!}"></a>
                    </li>

                    <?php endforeach; ?>

                    <?php $video = $data->r_intro;
                        if($video != "") : $idYoutube = explode("?v=",$video);
                    ?>
                        <li id="<?php echo $idYoutube[1];?>" class="youtubeVideoLoader"> </li>
                    <?php endif;?>

                </ul>

                <!-- box popup image detail -->

                <!--begin modal window-->
                <div class="modal fade" id="detailImageModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <div class="pull-left"><h3 class="prev-name">{!!$data->name!!}</h3></div>
                                <button type="button" class="close" data-dismiss="modal" title="Close"><span
                                            class="glyphicon glyphicon-remove"></span></button>
                            </div>
                            <div class="modal-body">

                                <!--CAROUSEL CODE GOES HERE-->
                                <!--begin carousel-->
                                <div id="proDetailGallery" class="carousel slide" data-interval="false">
                                    <div class="carousel-inner">
                                        <?php $i = 0; foreach($data->detail_img as $row) : $i++; ?>
                                        <div id="mediaItem<?php echo $i;?>"
                                             class="item-media item <?php //if ($i == '1') {echo 'active';}?>">
                                            <img style="margin: 0 auto;" alt="item<?php echo $i - 1;?>"
                                                 src="{!!url('/uploads/products/details/'.$row->images_url)!!}">
                                        </div>
                                    <?php endforeach; ?>
                                    <!--end carousel-inner--></div>
                                    <!--Begin Previous and Next buttons-->
                                    <a class="left carousel-control" href="#proDetailGallery" role="button"
                                       data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span></a> <a
                                            class="right carousel-control" href="#proDetailGallery" role="button"
                                            data-slide="next"> <span
                                                class="glyphicon glyphicon-chevron-right"></span></a>
                                    <!--end carousel--></div>

                                <!--end modal-body--></div>
                            <!--end modal-content--></div>
                        <!--end modal-dialoge--></div>
                    <!--end myModal--></div>


                <!-- Modal Video -->
                <div class="modal fade" id="youtubeModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <div id="videoModalContainer">

                                </div>
                            </div>
                            <div class="modal-footer">
                                <button id="CloseModalButton" type="button" class="btn btn-default" data-dismiss="modal">Đóng video</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal Template -->

                <!-- end popup image detail -->
            </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
            <!-- name - button - attributes -->
            <div class="box-black">
                <div class="two-row-1">
                    <h3 class="pro-detail-title"><a href="{!!url('/mobile/'.$data->id.'-'.$data->slug)!!}"
                                                    title="">{!!$data->name!!}</a></h3>
                    <h3 class="pro-detail-price">
                        Giá: <?php if ($data->price > 0) {?>{!!number_format($data->price)!!} đ <?php } else {echo ' Liên hệ';}?>
                    </h3>
                </div>

                <div class="two-row-2">
                    <p>
                        @if($data->status ==1)
                            <label class="ok-status"><i class="fa fa-check" aria-hidden="true"></i>Sẵn hàng</label>
                        @else
                            <label class="not-status">Tạm hết hàng</label>
                        @endif
                    </p>
                </div>
            </div>

            <div class="box-button">
                <div class="box-2-items">
                    @if($data->status ==1)
                        <?php if ($data->price > 0) {?>
                        <a href="{!!url('gio-hang/addcart/'.$data->id)!!}" title=""
                           class="btn btn-large btn-block btn-danger" style="font-size: 20px;"><i
                                    class="fa fa-cart-plus" aria-hidden="true"></i>Đặt mua ngay</a>
                        <?php } else {echo '&nbsp;';}?>
                    @else
                        <button rel="nofollow" class="btn btn-default no-product" disabled><i
                                    class="fa fa-cart-plus"></i> Tạm hết hàng
                        </button>
                    @endif
                </div>
                <div class="box-2-items end">
                    <a href="tel:19000325" rel="nofollow" class="btn btn-large btn-block btn-success"><i
                                class="fa fa-phone"></i> Hotline: 19000325</a>
                </div>
            </div>

            <div class="box-attributes">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th colspan="2" class="pro-header-attr">Thông số kỹ thuật</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="td-col-1">Phân nhóm</td>
                            <td>{!!$data->pro_details->w_group!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Nhãn hiệu</td>
                            <td>{!!$data->pro_details->w_branch!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Xuất xứ</td>
                            <td>{!!$data->pro_details->w_country!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Dòng sản phẩm</td>
                            <td>{!!$data->pro_details->w_role!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Kiểu máy</td>
                            <td>{!!$data->pro_details->w_type!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Đồng hồ dành cho</td>
                            <td>{!!$data->pro_details->w_sex!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Kích cỡ</td>
                            <td>{!!$data->pro_details->w_size!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Chất liệu vỏ</td>
                            <td>{!!$data->pro_details->w_out!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Chất liệu dây</td>
                            <td>{!!$data->pro_details->w_in!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Chất liệu kính</td>
                            <td>{!!$data->pro_details->w_on!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Độ chịu nước</td>
                            <td>{!!$data->pro_details->w_water!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Chức năng khác</td>
                            <td>{!!$data->pro_details->w_other!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Bảo hiểm</td>
                            <td>{!!$data->pro_details->w_time!!}</td>
                        </tr>
                        <tr>
                            <td class="td-col-1">Bảo hành quốc tế</td>
                            <td>{!!$data->pro_details->w_time_base!!}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box-sales">
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h3 class="panel-title">Sản phẩm kèm theo</h3>
                <div class="chinhsach">
                    @if ($data->promo1!='')
                        <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$data->promo1!!}</li>
                    @endif  @if($data->promo2!='')
                        <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$data->promo2!!}</li>
                    @endif  @if ($data->promo3!='')
                        <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$data->promo3!!}</li>
                    @endif
                </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                <h3 class="panel-title">Khuyễn mãi - Chính sách</h3>
                <div class="chinhsach">
                    <li><span class="glyphicon glyphicon-hand-right"></span> Trong hộp có: {!!$data->packet!!} </li>
                    <li><span class="glyphicon glyphicon-hand-right"></span> Giao hàng tận nơi miễn phí trong 1 ngày
                    </li>
                    <li><span class="glyphicon glyphicon-hand-right"></span> 1 đổi 1 trong 1 tháng với sản phẩm lỗi</li>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box-fulldesc">
            <div class="text-center-home">Giới thiệu sản phẩm
                <hr>
            </div>
            <div class="full-content">
                {!!$data->review!!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="box-button box-w-50">
            <div class="box-2-items">
                @if($data->status ==1)
                    <?php if ($data->price > 0) {?>
                    <a href="{!!url('gio-hang/addcart/'.$data->id)!!}" title=""
                       class="btn btn-large btn-block btn-danger" style="font-size: 20px;">
                       <i class="fa fa-cart-plus" aria-hidden="true"></i>Đặt mua ngay</a>
                    <?php } else {echo '&nbsp;';}?>
                @else
                    <button rel="nofollow" class="btn btn-default no-product" disabled><i class="fa fa-cart-plus"></i>
                        Tạm hết hàng
                    </button>
                @endif
            </div>
            <div class="box-2-items end">
                <a href="tel:19000325" rel="nofollow" class="btn btn-large btn-block btn-success"><i
                            class="fa fa-phone"></i> Hotline: 19000325</a>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- comment later -->

    </div>

    <?php if (count($relation)): ?>
    <div class="row">
        <div class="box-relation">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-product list-mar-50">
                <div class="text-center-home">SẢN PHẨM LIÊN QUAN
                    <hr>
                </div>
                <!-- danh muc noi bat -->
                <?php $count = 1;?>
                @foreach($relation as $row)
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
                    <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 item-pro">
                        <div class="pro-image">
                            <a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">
                                <img class="img-responsive" src="{!!url('/uploads/products/'.$row->images)!!}"
                                     alt="img responsive">
                            </a>
                        </div>
                        <div class="pro-title">
                            <h1><a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">{!!$row->name!!}</a></h1>
                        </div> <!-- /div bt -->
                        <div class="pro-price">
                            <?php if ($row->price > 0) { ?> {!!number_format($row->price)!!} đ <?php } else {echo ' Liên hệ';}?>
                        </div>
                    </div>  <!-- /div col-4 -->
             <?php 
          if ($count%4 == 0)
            {
                echo "</div>";
            }
            $count++;
          ?>
          @endforeach
          
          <?php if ($count%4 != 1) echo "</div>"; ?>
            <!-- danh muc noi bat -->

                <div class="clearfix">
                </div>
            </div>

        </div>
    </div>
    <?php endif; ?>
    <!-- ===================================================================================/news ============================== -->
    </div>
@endsection