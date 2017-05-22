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
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"><div id="googleMap"></div></div>
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

           <form action="{!! url('gui-lien-he') !!}" method="post" id="mainContact" class="navbar-form">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="form-group">
                   <label for="">Họ và tên :</label>
                   <input class="form-control" placeholder="Họ và tên" name="contact_name" id="contact_name" type="text">
               </div>

               <div class="form-group">
                   <label for="">Số điện thoại (hoặc email) :</label>
                   <input class="form-control" placeholder="Số điện thoại (hoặc email)" name="contact_info" id="contact_info" type="text">
               </div>

               <div class="form-group">
                   <label for="">Nội dung :</label>
                    <textarea class="form-control" name="contact_message" id="contact_message"></textarea>
               </div>

               <div class="input-group add-on frm-input">
                   <button class="btn btn-primary" type="submit"> Gửi đi</button>
               </div>

           </form>
       </div>
      </div>
    </div>
@endsection