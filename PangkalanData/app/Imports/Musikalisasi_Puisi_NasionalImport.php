<?php

namespace App\Imports;

use App\Musikalisasi_Puisi_Nasional;
use Maatwebsite\Excel\Concerns\ToModel;

class Musikalisasi_Puisi_NasionalImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Musikalisasi_Puisi_Nasional([
            //
        ]);
    }
}
