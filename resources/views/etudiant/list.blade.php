
{{--@yield('layouts.app')--}}
{{--@section('content')--}}
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List</title>
    <link href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/style.css.css')}}" rel="stylesheet">
    <link href="{{asset('assets/libs/fontawesome/@fortawesome/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0 text-center">Liste des étudiants</h1>
        <a href="{{ route('etudiant.create') }}" class="btn btn-primary">Add Student</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <table class="table table-striped">
        <tr>
            <th>Code</th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Téléphone</th>
            <th>Email</th>
            <th>Année</th>
            <th>Action</th>
        </tr>
        @foreach(\App\Models\Etudiant::all() as $e)
            <tr>
                <td>{{$e->code_etud}}</td>
                <td>{{$e->nom_etud}}</td>
                <td>{{$e->prenom_etud}}</td>
                <td>{{$e->tel_etud}}</td>
                <td>{{$e->mail_etud}}</td>
                <td>{{$e->anne_etud}}</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('etudiant.edit', $e->code_etud)}}" type="button" class="btn btn-warning">Edit <i class="fas fa-pencil-alt"></i></a>
                        <form action="{{ route('etudiant.destroy', $e->code_etud) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger m-0">Delete <i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </td>
            </tr>

        @endforeach

    </table>

{{--    <button class="btn btn-success"><a href="" va></a></button>--}}
</div>
</body>
</html>
{{--@endsection--}}
{{--@yield()--}}
