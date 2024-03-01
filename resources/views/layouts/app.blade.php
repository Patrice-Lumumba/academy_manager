<!doctype html>
<html lang="en">
<head>
    @if(!empty($title_page))
        <title>{{ $title_page }}</title>
    @else
        <title></title>
    @endif
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/fontawesome/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
</head>
<body id="page-top">

<div id="wrapper">
{{--    @include('layouts.header')--}}
{{--    @include('layouts.sidebar')--}}

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">
{{--            @include('layouts.navbar')--}}
        </div>
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
            </div>

            @yield('contents')

        </div>

    </div>

{{--    @include('layouts.footer')--}}
{{--</div>--}}
{{--<a href="#page-top" class="scroll-to-top rounded">--}}
{{--    <i class="fas fa-angle-up"></i>--}}
{{--</a>--}}
{{--<div class="container">--}}
{{--    <div class="container-fluid container-application">--}}
{{--        <div class="main-content position-relative">--}}
{{--            <div class="page-content">--}}
{{--                <div class="min-vh-100 py-5 d-flex align-items-center">--}}
{{--                    <div class="w-100">--}}
{{--                        <div class="row justify-content-center">--}}
{{--                            @yield('content')--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</div>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>
