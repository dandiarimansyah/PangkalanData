<?php

namespace App\Imports;

use App\Kamus;
use Maatwebsite\Excel\Concerns\ToModel;

class KamusImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Kamus([
            //
        ]);
    }
}
