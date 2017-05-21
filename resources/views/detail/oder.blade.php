@extends('layouts.special')
@section('content')
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3 class="panel-title tbreadcrumb">
      <span class="glyphicon glyphicon-home"><a href="{!!url('/')!!}" title=""> Trang chủ</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span><a href="{!! url('dat-hang')!!}" title=""> Đặt hàng</a>
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title="">{!!$slug!!}</a>
    </h3>              

      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="panel panel-success">
            <div class="panel-body">   
            <legend class="text-left">Xác nhận thông tin đơn hàng</legend> 
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Hình ảnh</th>
                      <th>Tên sản phẩm</th>
                      <th>Số lượng</th>
                      <th>Giá</th>
                      <th>Thành tiền</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach(Cart::content() as $row)
                    <tr>
                      <td><img src="{!!url('uploads/products/'.$row->options->img)!!}" alt="dell" width="80"></td>
                      <td>{!!$row->name!!}</td>
                      <td class="text-center">                        
                          <span>{!!$row->qty!!}</span>
                      </td>
                      <td>{!!number_format($row->price)!!} đ</td>
                      <td>{!!number_format($row->qty * $row->price)!!} đ</td>
                    </tr>
                  @endforeach                    
                    <tr>
                      <td colspan="5" style="font-weight: bold;background: #ECECEC; padding: 20px 100px 20px; text-align: right;"><b>Tổng cộng : {!!Cart::subtotal()!!} đ</b></td>                      
                    </tr>                   
                  </tbody>
                </table>                
              </div>
              {{-- form thong tin khach hang dat hang           --}}
              @if ($_GET['paymethod'] =='cod' )
              <form action="" method="POST" role="form">
                <legend class="text-left">Xác nhận thông tin khách hàng</legend>
                {{ csrf_field() }}
                <div class="form-group">
                  <div class="chinhsach">
                      <li><span class="glyphicon glyphicon-ok-sign"></span> Tên khách hàng : <strong>{{ Auth::user()->name }} </strong></li>
                      <li><span class="glyphicon glyphicon-ok-sign"></span> Điện thoại: <strong> {{ Auth::user()->phone }}</strong></li>
                      <li><span class="glyphicon glyphicon-ok-sign"></span> Địa chỉ: <strong> {{ Auth::user()->address }}</strong></li>
                 </div> 
                </div>               
                <div class="form-group">
                  <label for="">Các ghi chú khác</label>
                  <textarea name="txtnote" id="inputtxtNote" class="form-control" rows="4" required="required">                    
                  </textarea>
                </div>              
                <button type="submit" class="btn btn-primary pull-right btn-post-order"> Đặt hàng (COD)</button> 
              </form>
              @else 
              <form action="{!!url('/payment')!!}" method="Post" accept-charset="utf-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                 <div class="chinhsach">
                      <li><span class="glyphicon glyphicon-ok-sign"></span> Tên khách hàng : <strong>{{ Auth::user()->name }} </strong></li>
                      <li><span class="glyphicon glyphicon-ok-sign"></span> Điện thoại: <strong> {{ Auth::user()->phone }}</strong></li>
                      <li><span class="glyphicon glyphicon-ok-sign"></span> Địa chỉ: <strong> {{ Auth::user()->address }}</strong></li>
                 </div> 
                    
                </div>
                  <br>                
                <button type="submit" class="btn btn-danger pull-left btn-post-order"> Thanh toán qua Paypal </button> &nbsp;
              </form>
              @endif
            </div>
          </div>   
        </div>
    </div> 


    <?php if (count($relation)): ?>
  <div class="row">
    <div class="box-relation">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-product list-mar-50">
          <div class="text-center-home">SẢN PHẨM LIÊN QUAN
            <hr>
          </div>
          <!-- danh muc noi bat -->
          @foreach($relation as $row)
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 item-pro">
                  <div class="pro-image">
                    <a href="{!!url('san-pham/'.$row->id.'-'.$row->slug)!!}">
                    <img class="img-responsive" src="{!!url('/uploads/products/'.$row->images)!!}" alt="img responsive">
                    </a>
                  </div>
                  <div class="pro-title">
                    <h1><a href="{!!url('san-pham/'.$row->id.'-'.$row->slug)!!}">{!!$row->name!!}</a></h1>
                  </div> <!-- /div bt -->
                  <div class="pro-price">
                    {!!number_format($row->price)!!} đ
                  </div>
            </div>  <!-- /div col-4 -->
            @endforeach
          <!-- danh muc noi bat -->

          <div class="clearfix">
          </div>
        </div>

    </div>
  </div>
<?php endif; ?>
</div>
<!-- ===================================================================================/news ============================== -->
@endsection