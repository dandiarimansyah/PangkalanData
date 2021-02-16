<?php

namespace App\Exports;

use App\Penghargaan_Sastra;
use Maatwebsite\Excel\Concerns\FromCollection;

class Penghargaan_SastraExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Penghargaan_Sastra::all();
    }
}
