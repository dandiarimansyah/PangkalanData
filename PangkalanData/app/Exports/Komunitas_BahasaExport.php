<?php

namespace App\Exports;

use App\Komunitas_Bahasa;
use Maatwebsite\Excel\Concerns\FromCollection;

class Komunitas_BahasaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Komunitas_Bahasa::all();
    }
}
