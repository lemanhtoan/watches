@include('layouts.header')
@include('modules.menu')
    @yield('content')

    @include('modules.slide-partner')

    @yield('homeOther')

    @include('modules.gioithieu')
    @include('modules.branch')
@include('layouts.footer')