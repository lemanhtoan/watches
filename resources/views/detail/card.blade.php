@extends('layouts.special')
@section('content')
    <div class="breadcr">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3 class="panel-title  tbreadcrumb">
                    <a href="{!!url('/')!!}" title=""> <i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#" title="">Giỏ hàng</a>
                </h3>
            </div>
        </div>
    </div>
    <div class="container">

  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="panel- panel-success">
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
            </div>
            @elseif (Session()->has('flash_level'))
              <div class="alert alert-success">
                  <ul>
                      {!! Session::get('flash_massage') !!} 
                  </ul>
              </div>
          @endif
            <div class="panel-body-">
             <?php if (Cart::count() > 0){ ?>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Danh sách Sản phẩm</th>
                      <th>Giá</th>  
                      <th>Số lượng</th>  
                      <th>Cộng</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach(Cart::content() as $row)
                      <?php
                      $rowArr = (array) $row;
                      if (array_key_exists("pro_id", $rowArr)) {
                          $proId = $rowArr['pro_id'];
                      } else {
                          $proId = $rowArr['id'];
                      }
                      ?>
                    <tr>
                      <td>
                          <div class="cart-img">
                            <a href="{!!url('san-pham/'.$proId.'-'.strtolower($row->name))!!}"> <img src="{!!url('/uploads/products/'.$row->options->img)!!}" alt="dell" width="80"></a>
                          </div>
                          <div class="cart-group">
                            <a href="{!!url('san-pham/'.$proId.'-'.strtolower($row->name))!!}"> {!!$row->name!!}</a>

                            <a href="{!!url('gio-hang/delete/'.$row->rowId)!!}" onclick="return xacnhan('Xóa sản phẩm này ?')" ><span class="glyphicon glyphicon-remove" style="padding:5px; font-size:12px; color:#fff; background: #f00; border-radius: 50%;"></span></a>
                          </div>
                        </td>

                      <td><b class="price-total">{!! number_format($row->price) !!} đ</b></td>
                      
                      <td class="qty">                        
                          @if (($row->qty) >1)
                          <a href="{!!url('gio-hang/update/'.$row->rowId.'/'.$row->qty.'-down')!!}"><span class="glyphicon glyphicon-minus"></span></a> 
                          @else
                            <a href="#"><span class="glyphicon glyphicon-minus"></span></a> 
                          @endif
                          <input type="text" class="qty text-center" value=" {!!$row->qty!!}" style="width:30px; font-weight:bold; font-size:14px; color:#333;" readonly="readonly"> 
                        <a href="{!!url('gio-hang/update/'.$row->rowId.'/'.$row->qty.'-up')!!}"><span class="glyphicon glyphicon-plus-sign"></span></a>
                      </td>

                      <td><b class="price-total">{!! number_format($row->qty * $row->price) !!} đ</b></td>
                    </tr>
                  @endforeach                    
                    <tr>
                      <td colspan="6" class="sub-total"><b>Tổng SỐ : <?php $total = Cart::subtotal(); $show = explode(".0", $total);?> <?php echo $show[0];?> đ</b></td>
                    </tr>                    
                  </tbody>
                </table>                
              </div>
              <?php } else { ?>

                <h6 style="color: #f00;text-align: center;font-size: 18px;">Giỏ hàng của bạn đang trống.</h6>

              <?php } ?>

              <p class="continue">
                 <a href="{!!url('/')!!}" type="button" class="btn btn-continue"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Tiếp tục mua hàng</a>
              </p>

            <?php if (Cart::count() > 0){ ?>
              <div class="box-checkout">
               <form action="{!!url('/dat-hang')!!}" method="POST"  class='payment-form' accept-charset="utf-8">  

              <div class="col-xs-12 col-sm-12 col-md-7 no-padding cusomter-info">
                <legend class="text-left head-h3">Thông tin khách hàng</legend>
                {{ csrf_field() }}
                <div class="form-group">
                  <div class="chinhsach">
                     <?php if(Auth::guest()) { ?>
                        <ul class="form-customer">
                          <li><label for="">Tên khách hàng </label><input type="text" name="cus_name"></li>
                          <li><label for="">Điện thoại <b style="color: red">*</b> </label><input type="text" name="cus_phone" required></li>
                          <li><label for="">Địa chỉ </label><input type="text" name="cus_address"></li>
                        </ul>
                     <?php } else { ?>
                       <li><span class="glyphicon glyphicon-ok-sign"></span> Tên khách hàng  <strong>{{ Auth::user()->name }} </strong></li>
                       <li><span class="glyphicon glyphicon-ok-sign"></span> Điện thoại <strong> {{ Auth::user()->phone }}</strong></li>
                       <li><span class="glyphicon glyphicon-ok-sign"></span> Địa chỉ <strong> {{ Auth::user()->address }}</strong></li>
                      <?php } ?>

                 </div> 
                </div>

                <button type="submit" class="btn btn-out-submit">Gửi đơn hàng</button>

              </div>

              <div class="col-xs-12 col-sm-12 col-md-5 no-padding checkout-info">

                  <div class="row">
                    
                      <div class="input-group">
                        <legend class="text-left head-h3">Hình thức thanh toán</legend>
                        <div class="payment-method">
                          <input id="cart_tt_tructiep" type="radio" name="cus_method" value="tructiep">
                          <label for="cart_tt_tructiep">Thanh toán trực tiếp tại cửa hàng</label>
                        </div>

                        <div class="payment-method">
                          <input id="cart_tt_cod" type="radio" name="cus_method" value="cod"  checked="">
                          <label for="cart_tt_cod">Thanh toán khi nhận hàng (COD)</label>
                        </div>

                        <div class="payment-method">
                          <input id="cart_tt_bank" type="radio" name="cus_method" value="bank">
                          <label for="cart_tt_bank">Thanh toán trực tuyến qua ngân hàng</label>
                        </div>
                      </div>

                    </div>
                    <div class="row free-ship">
                      <div class="box-2-items">
                      <i class="fa fa-truck" aria-hidden="true"></i>
                        <span style="text-transform: capitalize;">Miễn phí giao hàng<br> </span>
                        <span>TOÀN QUỐC </span>
                      </div>
                      <div class="box-2-items end">
                      <i class="fa fa-check" aria-hidden="true"></i>
                        <span style="text-transform: capitalize;"> Đồng kiểm khi<br> </span>
                        <span>NHẬN HÀNG</span>
                      </div>
                    </div>
                  </div>   


                  </form>
                  </div>
              <?php } ?>

              </div>
              <hr>
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
                  <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 item-pro">
                        <div class="pro-image">
                          <a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">
                          <img class="img-responsive" src="{!!url('/uploads/products/'.$row->images)!!}" alt="img responsive">
                          </a>
                        </div>
                        <div class="pro-title">
                          <h1><a href="{!!url('san-pham/'.$proId.'-'.$row->slug)!!}">{!!$row->name!!}</a></h1>
                        </div> <!-- /div bt -->
                        <div class="graycolor">- - - -</div><div class="pro-price">
                            <?php if ($row->price > 0) { ?> {!!number_format($row->price)!!} đ <?php } else {echo "<span class='lienhe'>Giá: Liên hệ</span>";}?>
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
        </div>
      <?php endif; ?>
</div>
<!-- ===================================================================================/news ============================== -->
@endsection