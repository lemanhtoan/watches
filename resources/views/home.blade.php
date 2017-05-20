@extends('layouts.master')
@section('content')
    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-product">
      <div class="text-center-home">Sản phẩm nổi bật
        <hr>
      </div>
        <!-- danh muc noi bat -->
        @foreach($mobile as $row)
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 item-pro">
                <div class="pro-image">
                  <a href="{!!url('mobile/'.$row->id.'-'.$row->slug)!!}">
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
          <!-- danh muc noi bat -->

          <div class="clearfix">
          </div>

        <!--========================== phan danh muc rieng   =========================================  -->

      <div class="text-center-home">ĐỒNG HỒ ORIENT
        <hr>
      </div>

        @foreach($laptop as $row)
          <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 item-pro">
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
      <!-- danh muc noi bat -->

        <div class="clearfix">
        </div>

        <div class="box-advs">
          <a href="http://api.hostinger.vn/redir/1309904" target="_blank">
            <img src="{!!url('public/images/slides/thumbs/bn1.png')!!}" alt="Hosting Miễn Phí" border="0" width="100%" height="250" />
          </a>
        </div>


@endsection
