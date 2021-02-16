<?php

namespace App\Exports;

use App\Terbitan_Umum;
use Maatwebsite\Excel\Concerns\FromCollection;

class Terbitan_UmumExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Terbitan_Umum::all();
    }
}
