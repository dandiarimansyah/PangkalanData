<?php

namespace App\Exports;

use App\Kerja_Sama;
use Maatwebsite\Excel\Concerns\FromCollection;

class Kerja_SamaExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Kerja_Sama::all();
    }
}
