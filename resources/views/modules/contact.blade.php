@extends('layouts.special')
@section('content')
    <div class="breadcr">
        <div class="container">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <h3 class="panel-title tbreadcrumb">
                    <a href="{!!url('/')!!}" title=""> <i class="fa fa-home" aria-hidden="true"></i> Trang chủ</a>
                    <i class="fa fa-chevron-right" aria-hidden="true"></i> <a href="#" title="">{!!$slug!!}</a>
                </h3>
            </div>
        </div>
    </div>
    <div class="container">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

    
    <div class="row">
      <div class="text-center-home">{!!$slug!!}
       <hr>
       </div>
        @if(Session::has('message'))
            <div class="alert alert-info">
                {!! Session::get('message') !!}
            </div>
        @endif
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div id="googleMap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1862.3720284427582!2d105.80034215806191!3d21.00289429650307!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135acbb1e389a19%3A0xe161de9c21f76ec3!2zNjkgTMOqIFbEg24gTMawxqFuZywgTmjDom4gQ2jDrW5oLCBUaGFuaCBYdcOibiwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1499935613550" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
       <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

           <form action="{!! url('gui-lien-he') !!}" method="post" id="mainContact">
               <input type="hidden" name="_token" value="{{ csrf_token() }}">
               <div class="form-group">
                   <label for="">Họ và tên</label>
                   <input class="form-control" placeholder="Họ và tên" name="contact_name" id="contact_name" type="text" required>
               </div>

               <div class="form-group">
                   <label for="">Số điện thoại (hoặc email)</label>
                   <input class="form-control" placeholder="Số điện thoại (hoặc email)" name="contact_email" id="contact_info" type="text" required>
               </div>

               <div class="form-group">
                   <label for="">Nội dung</label>
                    <textarea class="form-control" name="contact_message" id="contact_message" rows="8" required></textarea>
               </div>

               <div class="input-group add-on frm-input">
                   <button class="btn btn-primary" type="submit"> Gửi đi</button>
               </div>

           </form>
       </div>
      </div>
    </div>
    </div>
@endsection