@extends('layouts.new-master')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3 class="panel-title">
      <span class="glyphicon glyphicon-home"><a href="{!!url('/')!!}" title=""> Home</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span><a href="{!!url('/mobile')!!}" title=""> Điện thoại</a>
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title="">{!!$slug!!}</a>
    </h3>              
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding">              
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="panel panel-success">
            <div class="panel-body">
              <div class="row">
              <!-- hot new content -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 no-padding">
                  <h3 class="pro-detail-title"><a href="{!!url('/mobile/'.$data->id.'-'.$data->slug)!!}" title="">{!!$data->name!!}</a></h3>
                  <hr>
                  <div class="row">
                    <div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
                      <div class="img-box">
                        <img class="img-responsive img-mobile" src="{!!url('/uploads/products/'.$data->images)!!}" alt="img responsive">
                      </div>
                      <div class="img-slide">
                        <div class="panel panel-default text-center">        
                          <div id="links">
                            @foreach($data->detail_img as $row)
                              <a href="{!!url('uploads/products/details/'.$row->images_url)!!}" title="{!!$data->name!!}" data-gallery>
                                  <img src="{!!url('/uploads/products/details/'.$row->images_url)!!}" alt="{!!$data->name!!}" width="30" height="40">
                              </a>
                            @endforeach                              
                          </div>
                            <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
                            <div id="blueimp-gallery" class="blueimp-gallery">
                                <!-- The container for the modal slides -->
                                <div class="slides"></div>
                                <!-- Controls for the borderless lightbox -->
                                <h3 class="title"></h3>
                                <a class="prev">‹</a>
                                <a class="next">›</a>
                                <a class="close">×</a>
                                <a class="play-pause"></a>
                                <ol class="indicator"></ol>
                                <!-- The modal dialog, which will be used to wrap the lightbox content -->
                                <div class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" aria-hidden="true">&times;</button>
                                                <h4 class="modal-title"></h4>
                                            </div>
                                            <div class="modal-body next"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-default pull-left prev">
                                                    <i class="glyphicon glyphicon-chevron-left"></i>
                                                    Previous
                                                </button>
                                                <button type="button" class="btn btn-primary next">
                                                    Next
                                                    <i class="glyphicon glyphicon-chevron-right"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>  
                          </div>                       
                        </div>                     
                      <label class="btn btn-large btn-block btn-warning">{!!number_format($data->price)!!} vnd</label>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7">
                      <div class="panel panel-info" style="margin: 0;">
                        <div class="panel-heading" style="padding:5px;">
                          <h3 class="panel-title">Khuyễn mãi - Chính sách</h3>
                        </div>
                        <div class="panel-body">
                          <div class="khuyenmai">
                            @if ($data->promo1!='')
                              <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$data->promo1!!}</li>
                            @elseif($data->promo2!='')
                              <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$data->promo2!!}</li>
                            @elseif ($data->promo3!='')
                              <li><span class="glyphicon glyphicon-ok-sign"></span>{!!$data->promo3!!}</li>
                            @endif 
                              <li><span class="glyphicon glyphicon-ok-sign"></span>Cài đặt phần miềm, tải nhạc - ứng dụng miến phí</li>                                                       
                          </div>                         
                        </div>
                      </div>
                      <div class="panel panel-info">
                        <div class="panel-body">
                         <div class="chinhsach">
                            <li><span class="glyphicon glyphicon-hand-right"></span> Trong hộp có: {!!$data->packet!!} </li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> Bảo hành chính hãng: thân máy 12 tháng, pin 12 tháng, sạc 12 tháng</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> Giao hàng tận nơi miễn phí trong 1 ngày</li>
                            <li><span class="glyphicon glyphicon-hand-right"></span> 1 đổi 1 trong 1 tháng với sản phẩm lỗi</li>
                         </div>
                        </div>
                      </div>
                      @if($data->status ==1)
                        <a href="{!!url('gio-hang/addcart/'.$data->id)!!}" title="" class="btn btn-large btn-block btn-primary" style="font-size: 20px;">Đặt hàng ngay</a>
                      @else
                        <a href="" title="" class="btn btn-large btn-block btn-primary disabled" style="font-size: 20px;">Tạm hết hàng</a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th colspan="2">Thông số kỹ thuật</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Phân nhóm</td>
                          <td>{!!$data->pro_details->w_group!!}</td>
                        </tr>
                        <tr>
                          <td>Nhãn hiệu</td>
                          <td>{!!$data->pro_details->w_branch!!}</td>
                        </tr>
                        <tr>
                          <td>Xuất xứ</td>
                          <td>{!!$data->pro_details->w_country!!}</td>
                        </tr>
                        <tr>
                          <td>Dòng sản phẩm</td>
                          <td>{!!$data->pro_details->w_role!!}</td>
                        </tr>
                        <tr>
                          <td>Kiểu máy</td>
                          <td>{!!$data->pro_details->w_type!!}</td>
                        </tr>
                        <tr>
                          <td>Đồng hồ dành cho</td>
                          <td>{!!$data->pro_details->w_sex!!}</td>
                        </tr>
                        <tr>
                          <td>Kích cỡ</td>
                          <td>{!!$data->pro_details->w_size!!}</td>
                        </tr>
                        <tr>
                          <td>Chất liệu vỏ</td>
                          <td>{!!$data->pro_details->w_out!!}</td>
                        </tr>
                        <tr>
                          <td>Chất liệu dây</td>
                          <td>{!!$data->pro_details->w_in!!}</td>
                        </tr>
                        <tr>
                          <td>Chất liệu kính</td>
                          <td>{!!$data->pro_details->w_on!!}</td>
                        </tr>
                        <tr>
                            <td>Độ chịu nước</td>
                            <td>{!!$data->pro_details->w_water!!}</td>
                        </tr>
                        <tr>
                            <td>Chức năng khác</td>
                            <td>{!!$data->pro_details->w_other!!}</td>
                        </tr>
                        <tr>
                            <td>Bảo hiểm</td>
                            <td>{!!$data->pro_details->w_time!!}</td>
                        </tr>
                        <tr>
                            <td>Bảo hành quốc tế</td>
                            <td>{!!$data->pro_details->w_time_base!!}</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <div class="table-responsive">
                    <div class="panel panel-default">        
                      <div class="panel-heading"> 
                        <small> Hình ảnh thực tế (click để xem kích thước đầy đủ)</small>
                      </div>
                      <div id="links">
                        @foreach($data->detail_img as $row)
                          <a href="{!!url('/uploads/products/details/'.$row->images_url)!!}" title="{!!$data->name!!}" data-gallery>
                              <img src="{!!url('/uploads/products/details/'.$row->images_url)!!}" alt="{!!$data->name!!}"  width="25%" height="120">
                          </a>
                        @endforeach                          
                      </div>
                        <!-- The Bootstrap Image Gallery lightbox, should be a child element of the document body -->
                        <div id="blueimp-gallery" class="blueimp-gallery">
                            <!-- The container for the modal slides -->
                            <div class="slides"></div>
                            <!-- Controls for the borderless lightbox -->
                            <h3 class="title"></h3>
                            <a class="prev">‹</a>
                            <a class="next">›</a>
                            <a class="close">×</a>
                            <a class="play-pause"></a>
                            <ol class="indicator"></ol>
                            <!-- The modal dialog, which will be used to wrap the lightbox content -->
                            <div class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body next"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default pull-left prev">
                                                <i class="glyphicon glyphicon-chevron-left"></i>
                                                Previous
                                            </button>
                                            <button type="button" class="btn btn-primary next">
                                                Next
                                                <i class="glyphicon glyphicon-chevron-right"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                      </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                  <h2> <small> Đánh giá chi tiết sản phẩm</small></h2>
                  <div class="accordion-group">
                    <div class="accordion-heading">
                      <p class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                        {!!$data->r_intro!!}
                      </p>
                    </div>
                    <div id="collapseTwo" class="accordion-body collapse">
                      <div class="accordion-inner">                        
                          {!!$data->review!!}
                      </div>
                    </div>
                    <button class="SeeMore btn-primary" data-toggle="collapse" href="#collapseTwo"><b class="caret"></b> Xem chi tiết</button>
                  </div>
                </div>
              </div>
              <div class="row">
                <hr>
                <h2 style="padding-left: 20px;"><small>Tin tức mới</small></h2>
                <hr>
                @include('modules.tin-tuc')  
              </div><!-- /row -->

            </div>
          </div>   
        </div>
      </div>     
    </div> 
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 no-padding">            
      <!-- panel inffo 1 -->
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Sản phẩm tương tự</h3>
        </div>
        <div class="panel-body no-padding">
        <?php 
          $mobile = DB::table('products')
                ->join('category', 'products.cat_id', '=', 'category.id')
                ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                ->where('category.parent_id','=','1')
                ->select('products.*','pro_details.*')
                ->orderBy('products.created_at', 'desc')
                ->paginate(2); 

        ?>
            @foreach($mobile as $row)
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 item-pro">
                    <div class="pro-image">
                        <a href="{!!url('laptop/'.$row->id.'-'.$row->slug)!!}">
                            <img class="img-responsive" src="{!!url('/uploads/products/'.$row->images)!!}" alt="img responsive">
                        </a>
                    </div>
                    <div class="pro-title">
                        <h1><a href="{!!url('mobile/'.$row->id.'-'.$row->slug)!!}">{!!$row->name!!}</a></h1>
                    </div> <!-- /div bt -->
                    <div class="pro-price">
                        {!!$row->price!!} đ
                    </div>
                </div>  <!-- /div col-4 -->
            @endforeach

        </div>
      </div> <!-- /panel info 2  quản cáo 1          -->
      
    <!-- panel info 2  quản cáo 1          -->          
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title text-center">Sự kiện HOT</h3>
      </div>
      <div class="panel-body no-padding">
       <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/bn1.png')!!}" alt="" width="100%" height="100%"> </a> <br>
        <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/bn2.jpg')!!}" alt="" width="100%" height="100%"> </a> <br>
        <a href="#" title=""><img src="{!!url('public/images/slides/thumbs/bn3.jpg')!!}" alt="" width="100%" height="100%"> </a>
      </div>
    </div> <!-- /panel info 2  quản cáo 1          -->        

     <!-- /panel info 2  quản cáo 1          -->  
     <!-- fan pages myweb -->
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title">Fans Pages</h3>
      </div>
      <div class="panel-body">
        Hãy <a href="#" title="">Like</a> facebook của MyWeb để cập nhật tin mới nhất
      </div>
    </div> <!-- /fan pages myweb -->        
  </div> 
</div>
<!-- ===================================================================================/news ============================== -->
@endsection