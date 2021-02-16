<?php

namespace App\Imports;

use App\Duta_Provinsi;
use Maatwebsite\Excel\Concerns\ToModel;

class Duta_ProvinsiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Duta_Provinsi([
            //
        ]);
    }
}
