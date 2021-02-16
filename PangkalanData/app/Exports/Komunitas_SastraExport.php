<?php

namespace App\Exports;

use App\Komunitas_Sastra;
use Maatwebsite\Excel\Concerns\FromCollection;

class Komunitas_SastraExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Komunitas_Sastra::all();
    }
}
