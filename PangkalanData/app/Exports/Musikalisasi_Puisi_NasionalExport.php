<?php

namespace App\Exports;

use App\Musikalisasi_Puisi_Nasional;
use Maatwebsite\Excel\Concerns\FromCollection;

class Musikalisasi_Puisi_NasionalExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Musikalisasi_Puisi_Nasional::all();
    }
}
