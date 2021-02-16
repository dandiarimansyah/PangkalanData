<?php

namespace App\Imports;

use App\Jurnal;
use Maatwebsite\Excel\Concerns\ToModel;

class JurnalImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Jurnal([
            //
        ]);
    }
}
