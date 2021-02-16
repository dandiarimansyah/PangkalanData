<?php

namespace App\Imports;

use App\Pesuluh;
use Maatwebsite\Excel\Concerns\ToModel;

class PesuluhImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pesuluh([
            //
        ]);
    }
}
