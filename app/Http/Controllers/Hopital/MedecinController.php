<?php
/** Limamou Laye Ka Software Developer **/
namespace App\Http\Controllers\Hopital;

use App\Http\Controllers\Controller;
use App\Models\Medecin;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;

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
        $medecin = Medecin::find($id);
        return view('medecin.edit', ['medecin' => $medecin]);
    }

    public function update(Request $request)
    {
        $medecin = Medecin::find($request->id);
        $medecin->nom = $request->nom;
        $medecin->prenom = $request->prenom;
        $medecin->telephone = $request->telephone;
        $result = $medecin->save();
        return redirect('/medecin/getAll');
    }

    public function delete($id)
    {
        $medecin = Medecin::find($id);
        if($medecin != null)
        {
            $medecin->delete();
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

    public function importCsv(Request $request)
    {
        Excel::import(new Medecin,$request->file);

        return "Record are imported successfully!";
    }


}
