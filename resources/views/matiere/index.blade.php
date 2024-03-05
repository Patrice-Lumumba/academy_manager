
@include('layouts.app')
{{--@section('content')--}}
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Liste des matières</title>

</head>
<body>

{{--<div class="main-content">--}}
{{--    <section class="section">--}}
{{--        <div class="section-body">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 col-sm-6 col-lg-3">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body text-center">--}}
{{--                            <div class="mb-2">Info Message</div>--}}
{{--                            <button class="btn btn-primary" >Launch</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--</div>--}}

<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0 text-center">Liste des matières</h1>
        <a href="{{ route('matiere.create') }}" class="btn btn-primary" id="toastr-1">Ajouter une matière</a>
    </div>
    <hr />
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
            <th>Titre</th>
            <th>Crédit</th>
            <th>Volume Horaire</th>
            <th>Numéro de la salle</th>
            <th>Action</th>
        </tr>
        @if($matiere->count() > 0)
            @foreach(\App\Models\Matiere::all() as $e)
                <tr>
                    <td>{{$e->code_mat}}</td>
                    <td>{{$e->label_mat}}</td>
                    <td>{{$e->credit_mat}}</td>
                    <td>{{$e->vh_mat}}</td>
                    <td>{{$e->num_salle}}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('matiere.edit', $e->code_mat)}}" type="button" class="btn btn-warning">Edit <i class="fas fa-edit"></i></a>
                            <form action="{{ route('matiere.destroy', $e->code_mat) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                <td class="text-center font-italic" colspan="6">Aucune matière enregistrée 😥</td>
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
