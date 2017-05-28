@extends('layouts.special')
@section('content')
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3 class="panel-title  tbreadcrumb">
      <a href="{!!url('/')!!}" title=""> <i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
      <i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#" title=""> Đặt hàng</a>
      <i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="#" title="">{!!$slug!!}</a>
    </h3>              
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
          <div class="panel panel-success">
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
            <div class="panel-body">
             <?php if (Cart::count() > 0){ ?>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Tên sản phẩm</th>
                      <th>Hình ảnh</th>
                      <th>Số lượng</th>
                      <th>Hành động</th>
                      <th>Giá</th>
                      <th>Thành tiền</th>
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
                      <td><b><a href="{!!url('san-pham/'.$proId.'-'.strtolower($row->name))!!}"> {!!$row->name!!}</a></b></td>
                      <td><img src="{!!url('/uploads/products/'.$row->options->img)!!}" alt="dell" width="80"></td>
                      
                      <td>                        
                          @if (($row->qty) >1)
                          <a href="{!!url('gio-hang/update/'.$row->rowId.'/'.$row->qty.'-down')!!}"><span class="glyphicon glyphicon-minus"></span></a> 
                          @else
                            <a href="#"><span class="glyphicon glyphicon-minus"></span></a> 
                          @endif
                          <input type="text" class="qty text-center" value=" {!!$row->qty!!}" style="width:30px; font-weight:bold; font-size:15px; color:blue;" readonly="readonly"> 
                        <a href="{!!url('gio-hang/update/'.$row->rowId.'/'.$row->qty.'-up')!!}"><span class="glyphicon glyphicon-plus-sign"></span></a>
                      </td>
                      <td><a href="{!!url('gio-hang/delete/'.$row->rowId)!!}" onclick="return xacnhan('Xóa sản phẩm này ?')" ><span class="glyphicon glyphicon-remove" style="padding:5px; font-size:18px; color:red;"></span></a></td>
                      <td>{!! number_format($row->price) !!} đ</td>
                      <td>{!! number_format($row->qty * $row->price) !!} đ</td>
                    </tr>
                  @endforeach                    
                    <tr>
                      <td colspan="6" style="font-weight: bold;background: #ECECEC; padding: 20px 100px 20px; text-align: right;"><b>Tổng cộng : {!!Cart::subtotal()!!} đ</b></td>                      
                    </tr>                    
                  </tbody>
                </table>                
              </div>
              <?php } else { ?>

                <h6>Giỏ hàng của bạn đang trống.</h6>

              <?php } ?>

              <div class="col-xs-12 col-sm-12 col-md-12 no-paddng">
              @if(Cart::count() !=0)

                  <form action="{!!url('/dat-hang')!!}" method="get"  class='payment-form' accept-charset="utf-8">  
                  <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-6">
                      <div class="input-group">
                        <label class="paymethod" for="paymethod">Hình thức thanh toán</label>

                        <div class="payment-method">
                          <input id="cart_tt_tructiep" type="radio" name="paymethod" value="tructiep">
                          <label for="cart_tt_tructiep">Thanh toán trực tiếp tại cửa hàng</label>
                        </div>

                        <div class="payment-method">
                          <input id="cart_tt_cod" type="radio" name="paymethod" value="cod"  checked="">
                          <label for="cart_tt_cod">Thanh toán khi nhận hàng (COD)</label>
                        </div>

                        <div class="payment-method">
                          <input id="cart_tt_bank" type="radio" name="paymethod" value="bank">
                          <label for="cart_tt_bank">Thanh toán trực tuyến qua ngân hàng</label>
                        </div>
                    </div>

                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6 free-ship">
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
                    
                        <button type="submit" class="btn btn-danger pull-left">Tiến hành thanh toán</button>
                      <a href="{!!url('/')!!}" type="button" class="btn btn-large btn-primary pull-right">Tiếp tục mua hàng</a>
                  </form>

              @endif
              </div>
              <hr>
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
                          <img class="img-responsive" src="{!!url('/uploads/products/'.$row->images)!!}" alt="img responsive">
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
</div>
<!-- ===================================================================================/news ============================== -->
@endsection