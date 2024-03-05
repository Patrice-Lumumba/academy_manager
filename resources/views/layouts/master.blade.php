<!DOCTYPE html>
<html lang="fr">

@include('admin.layouts.head')

<body id="page-top">

<div id="wrapper">

    @include('admin.layouts.sidebar')

    <div id="content-wrapper" class="d-flex flex-column">


        <div id="content">

            @include('admin.layouts.header')

            <div style="padding: 10px 40px">
                @yield('main-content')
            </div>

        </div>
        @include('admin.layouts.footer')
    </div>
</div>


<script
    src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@if(Session::has('success'))
    <script>
        toastr.options = {
            "progressBar": true
        }
        toastr.error("{{Session::get('success')}}");
    </script>
@endif



</body>

</html>
