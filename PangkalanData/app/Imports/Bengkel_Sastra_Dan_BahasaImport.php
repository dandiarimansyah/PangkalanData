<?php

namespace App\Imports;

use App\Bengkel_Sastra_Dan_Bahasa;
use Maatwebsite\Excel\Concerns\ToModel;

class Bengkel_Sastra_Dan_BahasaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Bengkel_Sastra_Dan_Bahasa([
            //
        ]);
    }
}
