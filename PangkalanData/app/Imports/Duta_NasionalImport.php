<?php

namespace App\Imports;

use App\Duta_Nasional;
use Maatwebsite\Excel\Concerns\ToModel;

class Duta_NasionalImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Duta_Nasional([
            //
        ]);
    }
}
