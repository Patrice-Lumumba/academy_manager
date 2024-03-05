@include('layouts.app')

	<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php use App\Models\Matiere; $title = "Liste des matières d'Academy Manager"?></title>
</head>
<body>
	<div class="container">
        <h1 class="">Créer / Ajouter une matière</h1>
            <form action="{{route('matiere.store')}}" method="post">
                    {{@csrf_field()}}
                <div class="form-group">
                    <label for="code_mat">Code de la matière: </label>
                    <input type="text" name="code_mat" id="code_mat" placeholder="Ex: Code" class="form-control">
                </div>

                <div class="form-group">
                    <label for="label_mat">Titre de la matière: </label>
                    <input type="text" name="label_mat" id="label_mat" placeholder="Ex: Mathématiques" class="form-control">
                </div>

                <div class="form-group">
                    <label for="credit_mat">Nombre de crédit de la matière: </label>
                    <input type="number" name="credit_mat" id="credit_mat" placeholder="Ex: 1" class="form-control" maxlength="10">
                </div>

                <div class="form-group">
                    <label for="label_mat">Volume Horaire de la matière: </label>
                    <input type="number" name="vh_mat" id="vh_mat" placeholder="Ex: 24" class="form-control" maxlength="120">
                </div>

                <div class="form-group">
                    <label for="num_salle">Numéro de la matière: </label>
                    <input type="text" name="num_salle" id="num_salle" placeholder="Ex: AB007" class="form-control">
                </div>

                <div class="row mt-2" style="text-align: right;">
                    <input type="submit" value="valider" class="btn btn-success col-2">
                </div>
            </form>
    </div>
</body>
</html>
