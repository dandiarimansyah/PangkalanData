<?php

namespace App\Imports;

use App\Perpustakaan;
use Maatwebsite\Excel\Concerns\ToModel;

class PerpustakaanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Perpustakaan([
            //
        ]);
    }
}
