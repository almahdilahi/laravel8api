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




    <div class="container">

        <div class="card bg-light mt-3">

            <div class="card-header">

                Import Excel to database

            </div>

            <div class="card-body">

                <form action="{{ route('importcsvmedecin') }}" method="POST" enctype="multipart/form-data">

                    @csrf

                    <input type="file" name="med-csv" id="med-csv" accept=".csv" class="form-control">

                    <br>

                    <button class="btn btn-success">Import User Data</button>

                </form>

            </div>

        </div>

    </div>



@endsection

