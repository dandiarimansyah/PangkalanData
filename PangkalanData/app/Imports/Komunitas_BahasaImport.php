<?php

namespace App\Imports;

use App\Komunitas_Bahasa;
use Maatwebsite\Excel\Concerns\ToModel;

class Komunitas_BahasaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Komunitas_Bahasa([
            //
        ]);
    }
}
