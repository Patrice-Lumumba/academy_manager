<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php use App\Models\Etudiant; $title = "Inscription"; ?></title>
    <link href="{{asset('assets/css/bootstrap/bootstrap.min.css')}}" rel="stylesheet">
    <script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
</head>
<body>
@if (Session::has("success"))
    ;
    <p class="alert alert-success">{{Session::get("success")}}</p>
@endif

@if (Session::has("error"))
    ;
    <p class="alert alert-danger">{{Session::get("error")}}</p>
@endif
<div class="card mt-4" style="width: 50%; margin: auto;">
    <div class="card-body">
        <h5 class="card-title">Formulaire d'inscription</h5>
        <form action="{{ route('etudiant.store') }}" method="post" class="mt-3">


            {{@csrf_field()}}
            <div class="row mt-2">
                <div class="col-sm-3">
                    <label for="nom_etud">Nom: </label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="nom_etud" id="nom_etud" placeholder="Ex: Charles" class="form-group">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-3">
                    <label for="prenom_etud">Prenom: </label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="prenom_etud" id="prenom_etud" placeholder="Ex: Charles" class="form-group">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-3">
                    <label for="tel_etud">Telephone: </label>
                </div>
                <div class="col-sm-3">
                    <input type="text" name="tel_etud" id="tel_etud" placeholder="Ex: 655436213" maxlength="9"
                           class="form-group">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-3">
                    <label for="nom_etud">Email: </label>
                </div>
                <div class="col-sm-3">
                    <input type="mail" name="mail_etud" id="mail_etud" placeholder="Ex: test@xyz.com"
                           class="form-group">
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-sm-3">
                    <label for="anne_etud">Année étude: </label>
                </div>
                <div class="col-sm-3">
                    <input type="number" name="anne_etud" id="anne_etud" placeholder="Ex: 1960" class="form-group">
                </div>
            </div>
            <div class="row mt-2" style="text-align: right;">
                <input type="submit" value="valider" class="btn btn-success col-sm-2">
            </div>
        </form>


    </div>

</div>

</body>
</html>
