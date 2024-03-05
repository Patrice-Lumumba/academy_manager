@extends('layouts.app')

@section('title', 'Edit Student')

@section('contents')
    <h1 class="mb-0">Edit Student</h1>
    <hr />
    <form action="{{ route('etudiant.update', $etudiant->code_etud) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col form-group">
                <label class="form-label">Nom</label>
                <input type="text" name="nom_etud" class="form-control" placeholder="Title" value="{{ $etudiant->nom_etud }}" >
            </div>
            <div class="col form-group">
                <label class="form-label">Prenom</label>
                <input type="text" name="prenom_etud" class="form-control" placeholder="Price" value="{{ $etudiant->prenom_etud }}" >
            </div>
        </div>
        <div class="row">
            <div class="col form-group">
                <label class="form-label">Téléphone</label>
                <input type="text" name="tel_etud" class="form-control" placeholder="Title" value="{{ $etudiant->tel_etud }}" >
            </div>
            <div class="col form-group">
                <label class="form-label">Email</label>
                <input type="email" name="mail_etud" class="form-control" placeholder="Price" value="{{ $etudiant->mail_etud }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-auto">
                <label class="form-label">Année</label>
                <input type="number" name="anne_etud" class="form-control" placeholder="Title" value="{{ $etudiant->anne_etud }}" >
            </div>

        </div>

        <div class="row">
            <div class="form-group mb-3">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection

