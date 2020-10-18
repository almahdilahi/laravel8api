<?php

namespace App\Http\Controllers\Hopital;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RendezvousController extends Controller
{
    public function add()
    {

        return view('rendezvous.add');
    }

    public function getAll()
    {

        return view('rendezvous.list');
    }

    public function edit($id)
    {
        return view('rendezvous.edit');
    }

    public function update($id)
    {
        return $this->getAll();
    }

    public function delete($id)
    {
        $etudiant = DB::table('gir_etudiant')->where('id','=',$id);
        if($etudiant != null)
        {
            $etudiant->delete();
        }
        return $this->getAll();
    }

    public function persist(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'ine' => 'required',
            'dateNaiss' => 'required',
            'nationalite' => 'required',
            'cohorte' => 'required',
            'ldap' => 'required',
            'ldap2' => 'required',
            'actif' => 'required',
        ]);


        DB::table('gir_etudiant')->insert([
            'date' => $request->date,
            'numTable' => $request->numTable,
            'ine' => $request->numTable,
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'genre' => $request->genre,
            'dateNaiss' => $request->dateNaiss,
            'lieuNaiss' => $request->lieuNaiss,
            'cni' => $request->cni,
            'adresse' => $request->adresse,
            'tel' => $request->tel,
            'mailPerso' => $request->mailPerso,
            'mailInstitutionnel' => $request->mailInstitutionnel,
            'mdp' => $request->mdp,
            'sip' => $request->sip,
            'eno' => $request->eno,
            'niveau' => $request->niveau,
            'filiere' => $request->filiere,
            'bourse' => $request->bourse,
            'liste' => $request->liste,
            'nationalite' => $request->nationalite,
            'cohorte' => $request->cohorte,
            'ldap' => $request->ldap,
            'ldap2' => $request->ldap2,
            'actif' => $request->actif,
            'type' => $request->type,
            'nouvelle_cohorte' => $request->nouvelle_cohorte

        ]);


        return $this->add()->with('success', 'Student created successfully.');
    }
}
