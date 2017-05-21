@extends('layouts.special')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3 class="panel-title tbreadcrumb">
      <span class="glyphicon glyphicon-home"><a href="{!!url('/')!!}" title=""> Trang chủ</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span><a href="{!!url('tin-tuc')!!}" title=""> Tin tức</a>
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title="">{!!$slug!!}</a>
    </h3>              
    
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 news-detail">
          <div class="panel panel-success">
            <div class="panel-body">
              <div class="row">
              <!-- hot new content -->
                <div class="col-lg-12">
                  <div class="text-center-home">{!!$data->title!!}
                   <hr>
                   </div>
                  <img class="img-new" src="{!!url('public/uploads/news/'.$data->images)!!}" alt="{!!$data->images!!}" >                  
                  <p class="summary-content">
                  <div class="panel-body">
                    <p class="text-left" style=" padding-bottom: 0px;">
                      <strong>
                        {!!$data->intro!!}
                      </strong>                  
                    </p>          
                      <div class="accordion-inner">
                        {!!$data->full!!}
                      </div>
                    <p class="text-left"><strong> Nguồn : <a target="#" href="#"> {!!$data->source!!}</a> </strong><br>
                      <span style="font-size:14px;color:#bdc3c7;">Sử lần cuối: {!!$data->updated_at!!} </span></p>
                      <p class="text-right"> <span class="glyphicon glyphicon-user" style="color:blue;"></span> <strong style="text-transform: capitalize;"> {!!$data->author!!} </strong></p>
                  </div>
                  </p>
                </div>                
              </div>
              <div class="row">
                <h1 style="padding: 30px; font-size: 18px; font-weight: bold;"> Tin khác</h1>
                @foreach($relation as $row)
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"> 
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                      <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}"><img src="{!!url('public/uploads/news/'.$row->images)!!}" alt="{!!$row->title!!}" width="90%" height="99%"> </a>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                      <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}"" title="{!!$row->title!!}">{!!$row->title!!}</a></h4>
                      <p> 
                        {!!$row->intro!!}
                      </p>
                      <p><strong>Lúc :</strong> {!!$row->created_at!!} Bởi : <strong>{!!$row->author!!} </strong></p>
                    </div>
                  </div> 
                @endforeach 
              </div><!-- /row -->
              <div class="center-page">
                {!!$relation->render()!!}
              </div>
            </div>
          </div>   
        </div>
    </div> 
    

    <?php if (count($newProduct)): ?>
      <div class="row">
        <div class="box-relation">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 list-product list-mar-50">
              <div class="text-center-home">SẢN PHẨM LIÊN QUAN
                <hr>
              </div>
              <!-- danh muc noi bat -->
              @foreach($newProduct as $row)
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
@endsection