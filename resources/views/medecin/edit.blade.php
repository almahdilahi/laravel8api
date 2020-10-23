<!--Limamou Laye Ka Software Developer-->
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Formulaire d\'édition des medecins') }}
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('updatemedecin')}}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label" for="id">ID</label>
                                <input class="form-control" readonly="true" type="text" name="id" id="id" value="{{ $medecin->id }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="date">Nom</label>
                                <input class="form-control" type="text" name="nom" id="nom" value="{{ $medecin->nom }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="date">Prénom</label>
                                <input class="form-control" type="text" name="prenom" id="prenom" value="{{ $medecin->prenom }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="date">Téléphone</label>
                                <input class="form-control" type="text" name="telephone" id="telephone" value="{{ $medecin->telephone }}">
                            </div>

                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer">
                                <a href="{{ route('getallmedecin') }}" class="btn btn-danger">Annuler</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>









@endsection

