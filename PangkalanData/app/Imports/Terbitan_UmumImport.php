<?php

namespace App\Imports;

use App\Terbitan_Umum;
use Maatwebsite\Excel\Concerns\ToModel;

class Terbitan_UmumImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Terbitan_Umum([
            //
        ]);
    }
}
