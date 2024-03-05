@include('layouts.app')

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php use App\Models\Departement; $title = "Liste des départements d'Academy Manager"?></title>
</head>
<body>
<div class="container">
    <h1 class="">Créer / Ajouter un département</h1>
    <form action="{{route('departement.store')}}" method="post">
        {{@csrf_field()}}
        <div class="form-group">
            <label for="code_mat">Code du département: </label>
            <input type="text" name="code_depart" id="code_depart" placeholder="Ex: Code" class="form-control">
        </div>

        <div class="form-group">
            <label for="label_mat">Site: </label>
            <input type="text" name="site" id="site" placeholder="Ex: ..." class="form-control">
        </div>

        <div class="form-group">
            <label for="credit_mat">Label: </label>
            <input type="number" name="label_depart" id="label_depart" placeholder="Ex: ..." class="form-control" maxlength="10">
        </div>

        <div class="row mt-2" style="text-align: right;">
            <input type="submit" value="valider" class="btn btn-success col-2">
        </div>
    </form>
</div>
</body>
</html>
