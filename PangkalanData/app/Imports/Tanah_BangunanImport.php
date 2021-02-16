<?php

namespace App\Imports;

use App\Tanah_Bangunan;
use Maatwebsite\Excel\Concerns\ToModel;

class Tanah_BangunanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Tanah_Bangunan([
            //
        ]);
    }
}
