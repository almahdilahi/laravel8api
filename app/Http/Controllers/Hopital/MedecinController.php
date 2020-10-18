<?php
/** Limamou Laye Ka Software Developer **/
namespace App\Http\Controllers\Hopital;

use App\Http\Controllers\Controller;
use App\Models\Medecin;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    public function add()
    {

        return view('medecin.add');
    }

    public function getAll()
    {
        $liste_medecins = Medecin::paginate(2);
        return view('medecin.list',['liste_medecins' => $liste_medecins]);
    }

    public function edit($id)
    {
        return view('medecin.edit');
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
            'nom' => 'required',
            'prenom' => 'required',
            'telephone' => 'required',
        ]);

        $medecin = new Medecin();
        $medecin->nom = $request->nom;
        $medecin->prenom = $request->prenom;
        $medecin->telephone = $request->telephone;
        $result = $medecin->save();

        return view('medecin.add',['confirmation' => $result]);
    }



}
