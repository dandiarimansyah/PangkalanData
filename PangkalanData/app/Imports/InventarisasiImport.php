<?php

namespace App\Imports;

use App\Inventarisasi;
use Maatwebsite\Excel\Concerns\ToModel;

class InventarisasiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Inventarisasi([
            //
        ]);
    }
}
