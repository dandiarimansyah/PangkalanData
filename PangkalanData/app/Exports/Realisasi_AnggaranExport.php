<?php

namespace App\Exports;

use App\Realisasi_Anggaran;
use Maatwebsite\Excel\Concerns\FromCollection;

class Realisasi_AnggaranExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Realisasi_Anggaran::all();
    }
}
