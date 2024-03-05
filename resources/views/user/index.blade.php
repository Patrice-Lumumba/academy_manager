
@include('layouts.app')
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
        <h1 class="mb-0 text-center">Liste des utilisateurs</h1>
        <a href="{{ route('etudiant.create') }}" class="btn btn-primary">Add Student</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif

    <table class="table table-responsive">
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Créer le: </th>
            <th>Modifier le: </th>
            <th>Action</th>
        </tr>
        @foreach(\App\Models\User::all() as $e)
            <tr>
                <td>{{$e->id}}</td>
                <td>{{$e->name}}</td>
                <td>{{$e->email}}</td>
                <td>{{$e->created_at}}</td>
                <td>{{$e->updated_at}}</td>
                <td class="align-middle">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('user.edit', $e->id)}}" type="button" class="btn btn-warning">Edit <i class="fas fa-edit"></i></a>
                        <form action="{{ route('user.destroy', $e->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete <i class="fas fa-trash-alt"></i></button>
                        </form>
                    </div>
                </td>
            </tr>

        @endforeach

    </table>
    <div class="bd-example-snippet bd-code-snippet"><div class="bd-example">
            <nav aria-label="Standard pagination example">
                <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div></div>

    {{--    <button class="btn btn-success"><a href="" va></a></button>--}}
</div>

</body>
</html>
{{--@endsection--}}
{{--@yield()--}}
@push('styles')
    <link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
    <style>
        div.dataTables_wrapper div.dataTables_paginate {
            display: none;
        }

        .zoom {
            transition: transform .2s; /* Animation */
        }

        .zoom:hover {
            transform: scale(5);
        }
    </style>
@endpush

@push('scripts')

    <!-- Page level plugins -->
    <script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
    <script>

        $('#product-dataTable').DataTable( {
            "scrollX": false,
            "columnDefs":[
                {
                    "orderable":false,
                }
            ]
        } );

        // Sweet alert

        function deleteData(id){

        }
    </script>
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.dltBtn').click(function(e){
                var form=$(this).closest('form');
                var dataID=$(this).data('id');
                // alert(dataID);
                e.preventDefault();
                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            form.submit();
                        } else {
                            swal("Your data is safe!");
                        }
                    });
            })
        })
    </script>
@endpush
