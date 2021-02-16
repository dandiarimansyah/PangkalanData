<?php

namespace App\Imports;

use App\Komunitas_Sastra;
use Maatwebsite\Excel\Concerns\ToModel;

class Komunitas_SastraImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Komunitas_Sastra([
            //
        ]);
    }
}
