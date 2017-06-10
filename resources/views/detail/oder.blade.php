@extends('layouts.special')
@section('content')
    <div class="breadcr">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3 class="panel-title  tbreadcrumb">
                    <a href="{!!url('/')!!}" title=""> <i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#" title="">{!! $slug !!}</a>
                </h3>
            </div>
        </div>
    </div>
    <div class="container">

    <?php $buyok = DB::table('settings')->where('name', 'buyok')->select('content')->get()[0]; ?>
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
             <div class="row">
                  <div class="text-center-home" style="font-size: 20px;">{!! $flash_massage !!} </div>
                  <div class="box-order">
                    <p>Số đơn hàng: <b style="font-weight: bold; color: red; font-size: 18px; margin-left: 5px;"><?php echo $orderNumber->note;?></b></p>

                    <div class="message-done">
                      <?php echo $buyok->content;?>
                    </div>


                  </div>

                  <p class="continue">
                   <a href="{!!url('/')!!}" type="button" style="margin: 15px 0; float:left;"><i class="fa fa-angle-double-left" aria-hidden="true"></i> Trở về Trang chủ</a>
                </p>
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
              <?php endif; ?>
        </div>
  </div>
    </div>
<!-- ===================================================================================/news ============================== -->
@endsection