@extends('layouts.special')
@section('content')
    <div class="breadcr">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3 class="panel-title tbreadcrumb">
                    <a href="{!!url('/')!!}" title=""> <i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#" title=""> Tin tức </a>
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 news-list">
          <div class="row">
                  <div class="text-center-home">{!! $cateName !!}
                    <hr>
                  </div>
                  
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                  <?php $i = 0; foreach($news as $item) { if (++$i == 2) break;?>
                    <a href="{!!url('tin-tuc/'.$item->id.'-'.$item->slug)!!}" title=""><img src="{!!url('uploads/news/'.$item->images)!!}" alt="" ></a>
                      <h3 class="title-h3"><a href="{!!url('tin-tuc/'.$item->id.'-'.$item->slug)!!}" title="">{!!$item->title!!} </a></h3>
                      <div class="summary-content">
                          {!!$item->intro!!}
                      </div>
                  <?php } ?>
                  </div>
                  
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                      <?php $i = 0; foreach($news as $item) { if (++$i == 6) break;?>
                      <?php if ($i>1): ?>
                           <div class="newtop news-<?php echo $i;?> col-xs-12 col-sm-6 col-md-6 col-lg-6">
                             <a href="{!!url('tin-tuc/'.$item->id.'-'.$item->slug)!!}" title=""><img src="{!!url('uploads/news/'.$item->images)!!}" alt="" ></a>
                            <h3 class="title-h3"><a href="{!!url('tin-tuc/'.$item->id.'-'.$item->slug)!!}" title="">{!!$item->title!!} </a></h3>
                           </div>
                      
                      <?php endif; ?>
                    <?php } ?>
                  </div>
          </div>
          <div class="break"></div>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-9 col-lg-9">
                <ul class="list-new">
                   <?php foreach($list as $item) {?>
                      <li>
                        <div class="new-left">
                          <a href="{!!url('tin-tuc/'.$item->id.'-'.$item->slug)!!}" title=""><img src="{!!url('uploads/news/'.$item->images)!!}" alt="" width="200  "></a>
                        </div>
                        <div class="new-right">
                          <h3 class="title-h3"><a href="{!!url('tin-tuc/'.$item->id.'-'.$item->slug)!!}" title="">{!!$item->title!!} </a></h3>
                          <div class="summary-content">
                            {!!$item->intro!!}
                        </div>
                        </div>
                     </li>
                    <?php } ?>
                </ul>
                <?php if (count($list)): ?>
                  <div class="center-page">
                      {!!$list->render()!!}
                  </div>
                <?php else:?>
                     <h4 style="text-align: left; font-size: 18px; font-weight: bold; "> Chưa có dữ liệu.</h4>
                <?php endif;?>

                 <div class="box-comment">
                  <!-- comment later -->
                  <div class="text-center-home left-align">ĐÁNH GIÁ VÀ NHẬN XÉT
                  </div>
                  <?php $curentURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>
                  <div class="fb-comments" data-href="<?php echo $curentURL; ?>" data-numposts="10"></div>
              </div>

            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                  <div class="panel panel-info">
                      <div class="panel-heading">
                          <h3 class="panel-title text-center">DANH MỤC TIN</h3>
                      </div>
                      <div class="panel-body no-padding">
                          <?php foreach($catenews as $item): $itemId = $item->id;?>
                          <a class="list-news" href="{!!url('tintuc/'.$itemId)!!}"><i class="fa fa-angle-right"></i>{!!$item->name!!}</a> <br>
                          <?php endforeach;?>
                      </div>
                  </div> <!-- /panel info 2  quản cáo 1          -->

                  <?php $dataAdvs = DB::table('advs')->where('type','2')->where('status', '1')->select('advs.*')->orderBy('id', 'asc')->paginate(5);?>
                  <?php if (count($dataAdvs)) : ?>
                  <div class="panel panel-info">
                      <div class="panel-heading">
                          <h3 class="panel-title text-center">Sự kiện HOT</h3>
                      </div>
                      <div class="panel-body no-padding">
                          <?php $i=0; foreach($dataAdvs as $item): $i++;?>
                          <a href="<?php echo $item->url?>" target="_blank"><img src="{!!url('/uploads/advs/'.$item->image)!!}" alt=""></a> <br>
                          <?php endforeach; ?>
                      </div>
                  </div> <!-- /panel info 2  quản cáo 1          -->
                <?php endif;?>

            </div>
          </div>

        </div>
    </div>
<!-- ===================================================================================/news ============================== -->
@endsection