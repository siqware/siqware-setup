<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title') | siqWare</title>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <link href="{{asset('siqWare/dist/semantic.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('siqWare/plugins/ionicons/css/ionicons.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('siqWare/css/main.css')}}" rel="stylesheet"/>
    <link href="{{asset('siqWare/plugins/pacejs/pace.css')}}" rel="stylesheet"/>
    @stack('css')
    <link href="{{asset('siqWare/css/utilities-stylesheet.css')}}" rel="stylesheet"/>
    <link href="{{asset('siqWare/css/custom-css.css')}}" rel="stylesheet"/>
    @yield('css')
</head>
<body>
<div id="contextWrap">
    <!--sidebar-->
    @include('layouts.sidebar')
    <div class="pusher">
        <!--navbar-->
        @include('layouts.header')
        <!--navbar-->
        <!--maincontent-->
        <div class="mainWrap navslide">
            <div class="ui equal width left aligned padded grid stackable">
                <!--Site Content-->
                @yield('content')
                <!--Site Content-->
            </div>
        </div>
        <!--maincontent-->
    </div>
</div>
<!--jquery-->
<script src="{{asset('siqWare/js/jquery-2.1.4.min.js')}}"></script>
<!--jquery-->
<!--semantic-->
<script src="{{asset('siqWare/dist/semantic.min.js')}}"></script>
<!--semantic-->
<script src="{{asset('siqWare/plugins/cookie/js.cookie.js')}}"></script>
<script src="{{asset('siqWare/plugins/nicescrool/jquery.nicescroll.min.js')}}"></script>
<script data-pace-options='{ "ajax": false }' src="{{asset('siqWare/plugins/pacejs/pace.js')}}"></script>
<script src="{{asset('siqWare/js/main.js')}}"></script>
@stack('js')
<script src="{{asset('siqWare/js/custom-script.js')}}"></script>
@yield('js')
</body>
</html>
