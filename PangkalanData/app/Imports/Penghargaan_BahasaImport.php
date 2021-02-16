<?php

namespace App\Imports;

use App\Penghargaan_Bahasa;
use Maatwebsite\Excel\Concerns\ToModel;

class Penghargaan_BahasaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Penghargaan_Bahasa([
            //
        ]);
    }
}
