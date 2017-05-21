@extends('layouts.special')
@section('content')
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
    <h3 class="panel-title tbreadcrumb">
      <span class="glyphicon glyphicon-home"><a href="{!!url('/')!!}" title=""> Trang chủ</a></span> 
      <span class="glyphicon glyphicon-chevron-right" style="font-size: 11px;"></span> <a href="#" title="">{!!$slug!!}</a>
    </h3>              
    
    <div class="row">
      <div class="text-center-home">{!!$slug!!}
       <hr>
       </div>
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Form maps</div>
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Form contact</div>
      </div>
    </div>
@endsection