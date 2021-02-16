<?php

namespace App\Imports;

use App\Penelitian;
use Maatwebsite\Excel\Concerns\ToModel;

class PenelitianImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Penelitian([
            //
        ]);
    }
}
