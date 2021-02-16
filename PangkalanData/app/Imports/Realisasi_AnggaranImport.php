<?php

namespace App\Imports;

use App\Realisasi_Anggaran;
use Maatwebsite\Excel\Concerns\ToModel;

class Realisasi_AnggaranImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Realisasi_Anggaran([
            //
        ]);
    }
}
