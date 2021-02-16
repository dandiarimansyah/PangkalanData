<?php

namespace App\Imports;

use App\Penyuluhan;
use Maatwebsite\Excel\Concerns\ToModel;

class PenyuluhanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Penyuluhan([
            //
        ]);
    }
}
