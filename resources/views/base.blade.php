<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Siakad | STT - STIE </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{URL::asset('images/icon.ico') }}" rel="SHORTCUT ICON" />
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/vendor.css')}}">
    <!-- Theme initialization -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/app.css')}}">
    
</head>
<body>
   <div class="wrapper">
    <div class="app" id="app">

      @include('header')

      @if(Auth::user()->level==1)
        @include('sidebaradm')
      @elseif(Auth::user()->level==2)
        @include('sidebardsn')
      @elseif(Auth::user()->level==3)
        @include('sidebarmhs')
      @endif
      <div class="sidebar-overlay" id="sidebar-overlay"></div>
      <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
      <div class="mobile-menu-handle"></div>

      <!-- Main content -->
      <section class="content">
          @yield('content')
      </section><!-- /.content -->
    </div>
  @include('footer')
  @yield('script')
  <script>
      <script>
      (function(i, s, o, g, r, a, m)
      {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function()
        {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-80463319-4', 'auto');
    ga('send', 'pageview');
</script>
<script src="{{URL::asset('assets/js/vendor.js')}}"></script>
<script src="{{URL::asset('assets/js/app.js')}}"></script>
</body>
</html>
