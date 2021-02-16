<?php

namespace App\Exports;

use App\Tanah_Bangunan;
use Maatwebsite\Excel\Concerns\FromCollection;

class Tanah_BangunanExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Tanah_Bangunan::all();
    }
}
