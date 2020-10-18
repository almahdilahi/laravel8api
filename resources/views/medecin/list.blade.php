<!--Limamou Laye Ka Software Developer-->
@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                            {{ __('LISTE DES MEDECINS') }}
                    </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>#</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Téléphone</th>
                                    <th>Action</th>
                                </tr>
                                @foreach($liste_medecins  as $medecin)
                                    <tr>
                                        <td>{{$medecin->id}}</td>
                                        <td>{{$medecin->nom}}</td>
                                        <td>{{$medecin->prenom}}</td>
                                        <td>{{$medecin->telephone}}</td>
                                        <td>
                                            <a href="{{ route('editmedecin', ['id'=>$medecin->id]) }}" class="btn btn-success btn-circle">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a href="{{ route('deletemedecin', ['id'=>$medecin->id]) }}" class="btn btn-danger btn-circle">

                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>

                                @endforeach
                            </table>
                            <div class="nav-scroller py-1 mb-2"> <nav class="nav d-flex justify-content-center">
                                    <ul class="pagination pagination-sm flex-sm-wrap">
                                        {{$liste_medecins->links()}}
                                    </ul>
                                </nav>
                            </div>

                        </div>
    </div>
    </div>
    </div>
    </div>









@endsection

