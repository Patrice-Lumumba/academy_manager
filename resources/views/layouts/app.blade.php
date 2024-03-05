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
    <link href="{{asset('assets/libs/fontawesome/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />

</head>
<body id="page-top">

<div id="wrapper">
{{--    @include('layouts.header')--}}
{{--    @include('layouts.sidebar')--}}

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">
            @include('layouts.navbar')
        </div>
        <div class="container-fluid">
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">@yield('title')</h1>
            </div>

            @yield('contents')

        </div>

    </div>
</div>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
</body>
</html>
