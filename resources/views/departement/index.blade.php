@php use App\Models\Departement; @endphp

@include('layouts.app')
{{--@section('content')--}}
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des Départements</title>

</head>
<body>

<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0 text-center">Liste des départements</h1>
        <a href="{{ route('departement.create') }}" class="btn btn-primary" id="toastr-1">Ajouter un département</a>
    </div>
    <hr/>
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    @if (Session::has("error"))
        <div class="alert alert-danger alert-dismissable fade show">
            <button class="close" data-dismiss="alert" aria-label="Close">×</button>
            {{session('error')}}
        </div>
        {{--    <p class="alert alert-danger">{{Session::get("error")}}</p>--}}
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Code</th>
            <th>Site</th>
            <th>Label</th>
            <th>Action</th>
        </tr>
        @if($departement->count() > 0)
            @foreach(Departement::all() as $e)
                <tr>
                    <td>{{$e->code_depart}}</td>
                    <td>{{$e->site}}</td>
                    <td>{{$e->label_depart}}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('departement.edit', $e->code_depart)}}" type="button" class="btn btn-warning">Edit
                                <i class="fas fa-edit"></i></a>
                            <form action="{{ route('departement.destroy', $e->code_depart) }}" method="POST" type="button"
                                  class="btn btn-danger" onsubmit="return confirm('Delete?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger m-0">Delete <i class="fas fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>

            @endforeach
        @else
            <tr>
                <td class="text-center font-italic" colspan="3">Aucun département enregistrée 😥</td>
            </tr>
        @endif
    </table>

    {{--    <button class="btn btn-success"><a href="" va></a></button>--}}
</div>
<script>
    $("#toastr-1").click(function () {
        iziToast.info({
            title: 'Hello, world!',
            message: ' @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
                @endif

                @if (Session::has("error"))
                {{session('error')}}
                {{--    <p class="alert alert-danger">{{Session::get("error")}}</p>--}}
                @endif',
            position: 'topRight'
        });
    });
</script>
</body>
<!-- General JS Scripts -->
<script src="{{asset('assets/js/app.min.js')}}"></script>
<!-- JS Libraies -->
<script src="{{asset('assets/js/bundles/izitoast/js/Toast.min.js')}}"></script>
<!-- Page Specific JS File -->

<script src="{{asset('assets/js/page/toastr.js')}}"></script>
<!-- Template JS File -->
<script src="{{asset('assets/js/scripts.js')}}"></script>

<!-- Custom JS File -->
<script src="{{asset('assets/js/custom.js')}}"></script>
</html>
{{--@endsection--}}
{{--@yield()--}}
