@include('layouts.header')
@include('modules.menu')
	@include('modules.slide')
	
	@include('modules.slide-partner')

	@include('modules.two-advs')
    <div class="container">     
      	<div class="row">   
			@yield('content')
      	</div>       <!-- /row -->
    </div> <!-- /container -->
    @yield('homeOther')

    @include('modules.gioithieu')
    @include('modules.branch')
@include('layouts.footer')