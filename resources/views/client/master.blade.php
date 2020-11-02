<!doctype html>
<html lang="en-US">

<!-- Mirrored from tk-themes.net/html-umbra/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Apr 2020 08:12:20 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <title>Nha khoa Thanh Tâm | {{$titlePage ?? 'Trang chủ'}}</title>

    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{asset('assets/css/font-awesome.css')}}" type="text/css" media="all"/>

    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="{{asset('assets/css/style.css?v=1.2')}}" type="text/css" media="all"/>
    <link rel="stylesheet" href="{{asset('assets/css/custom.css?v=1.1')}}" type="text/css" media="all"/>

    @yield('css')
</head>
<body>
{{--<div class="noo-spinner">--}}
{{--    <div class="sk-rotating-plane"></div>--}}
{{--</div>--}}
<div class="site">
    @yield('content')
    @include('client.layout.footer')
</div>

<a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>
<script type="text/javascript" src="{{asset('assets/js/jquery.min.js?v=1.1')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js?v=1.1')}}"></script>

<script type="text/javascript" src="{{asset('assets/js/script.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/js/off-cavnas.js')}}"></script>
@stack('scripts')
</body>
</html>
