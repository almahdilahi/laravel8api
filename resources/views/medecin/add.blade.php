<!--Limamou Laye Ka Software Developer-->
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{ __('Formulaire d\'enregistrement des medecins') }}
                    </div>
                    <div class="card-body">
                      <form method="post" action="{{route('persistmedecin')}}">
                            @csrf
                        <div class="form-group">
                            <label class="control-label" for="date">Nom</label>
                            <input class="form-control" type="text" name="nom" id="nom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="date">Prénom</label>
                            <input class="form-control" type="text" name="prenom" id="prenom">
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="date">Téléphone</label>
                            <input class="form-control" type="text" name="telephone" id="telephone">
                        </div>

                          <div class="form-group">
                              <input class="btn btn-success" type="submit" name="envoyer" id="envoyer" value="Envoyer">
                              <input type="reset" class="btn btn-danger" name="annuler" id="annuler" value="Annuler">
                          </div>
                     </form>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <form class="form form-horizontal" action="{{ route('importcsvmedecin') }}" method="post">
        <h6>Ajout Medecin par fichier csv</h6>
    <div class="form-group">
        <div class="col-md-12">
            <input type="file" accept=".csv" required>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-12">
            <button class="btn btn-primary" type="submit">Ajouter <span class="fas fa-upload"></span></button>
        </div>
    </div>
    </form>



@endsection

