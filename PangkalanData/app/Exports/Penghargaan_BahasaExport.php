<?php

namespace App\Exports;

use App\Penghargaan_Bahasa;
use Maatwebsite\Excel\Concerns\FromCollection;

class Penghargaan_BahasaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penghargaan_Bahasa::all();
    }
}
