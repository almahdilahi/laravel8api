<?php

namespace App\Imports;

use App\Models\Medecin;
use Maatwebsite\Excel\Concerns\ToModel;

class MedecinsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Medecin([
            'nom'     => $row[0],
            'prenom'     => $row[1],
            'telephone'     => $row[2],
        ]);
    }
}
