<?php

namespace App\Imports;

use App\Kerja_Sama;
use Maatwebsite\Excel\Concerns\ToModel;

class Kerja_SamaImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kerja_Sama([
            //
        ]);
    }
}
