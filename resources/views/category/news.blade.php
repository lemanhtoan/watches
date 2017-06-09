@extends('layouts.special')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 news-list">
    <h3 class="panel-title tbreadcrumb">
      <a href="{!!url('/')!!}" title=""> <i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
      <i class="fa fa-chevron-right" aria-hidden="true"></i><a href="#" title=""> Tin tức </a>
    </h3>              
    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 no-padding"> 
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
          <div class="panel panel-success">
            <div class="panel-body">
              <div class="row">
              <!-- hot new content -->              
                <div class="col-lg-6">
                    <a href="{!!url('tin-tuc/'.$hot1->id.'-'.$hot1->slug)!!}" title=""><img src="{!!url('uploads/news/'.$hot1->images)!!}" alt="" height="200"></a>
                  <h3 class="title-h3"><a href="{!!url('tin-tuc/'.$hot1->id.'-'.$hot1->slug)!!}" title="">{!!$hot1->title!!} </a></h3>
                  <p class="summary-content">
                    {!!$hot1->intro!!}
                  </p>
                </div>
                <div class="col-lg-6 no-padding">
                  <div class="row">
                    @foreach($data as $row)
                      <div class="col-lg-12 ">
                        <h4 class="title-news"><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}">{!!$row->title!!}</a></h4>
                        <div class="col-lg-3">
                          <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title=""><img src="{!!url('uploads/news/'.$row->images)!!}" alt="" style="padding-right:10px; padding-left: 0; width: 90px; max-width: inherit !important; "></a>
                        </div>

                        <div class="col-lg-9">
                          <p class="sum">{!!$row->intro!!}</p>
                        </div>
                        
                      </div>
                    @endforeach                   
                  </div>                                     
                </div>
              </div>

              <div class="row">
                @foreach($all as $row)
                  <div class="col-lg-12 no-padding">
                    <hr>
                    <div class="col-lg-3">
                      <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->slug!!}"><img src="{!!url('uploads/news/'.$row->images)!!}" alt="" width="90%" height="99%"> </a>
                    </div>
                    <div class="col-lg-9">
                      <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="">{!!$row->title!!}</a></h4>
                      <p> 
                        {!!$row->intro!!}
                      </p>
                      <p><strong>Lúc :</strong> {!!$row->created_at!!}  <strong>Bởi : </strong> <a href="#" title="admin"> {!!$row->author!!}</a></p>
                    </div>
                  </div> 
                @endforeach 
              </div><!-- /row -->
              <div class="center-page">
                {!!$all->render()!!}
              </div>
            </div>
          </div>   
        </div>
      </div>     
    </div> 
    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">            
      <!-- panel inffo 1 -->
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title text-center">Tin mới</h3>
        </div>
        <div class="panel-body">
            
            @foreach($all as $row)
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                  <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$row->title!!}"><img src="{!!url('uploads/news/'.$row->images)!!}" alt="{!!$row->images!!}" width="99%" height="99%"> </a>
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                 <a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="">{!!$row->title!!}</a>
                 </div>
                </div>
            @endforeach                  
                    
            
        </div>
    </div>
    <!-- panel info 2  quản cáo 1          -->     
    <?php
    $dataAdvs = DB::table('advs')->where('type','2')->select('advs.*')->orderBy('id', 'asc')->paginate(5);
    ?>     
    <div class="panel panel-info">
      <div class="panel-heading">
        <h3 class="panel-title text-center">Sự kiện HOT</h3>
      </div>
      <div class="panel-body no-padding">
      <?php if (count($dataAdvs)) : $i=0; foreach($dataAdvs as $row): $i++;?>
        <a href="<?php echo $row->url?>" target="_blank"><img src="{!!url('/uploads/advs/'.$row->image)!!}" alt=""></a> <br>
      <?php endforeach; endif;?>
      </div>
    </div> <!-- /panel info 2  quản cáo 1          -->        
  
  
  </div> 
</div>
<!-- ===================================================================================/news ============================== -->
@endsection