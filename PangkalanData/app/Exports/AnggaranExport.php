<?php

namespace App\Exports;

use App\Models\Anggaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;

class AnggaranExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithStyles
{
    private $pilih;
    private $tahun_anggaran;

    public function __construct($pilih, $tahun_anggaran)
    {
        $this->pilih = $pilih;
        $this->tahun_anggaran = $tahun_anggaran;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->pilih == 'tahun' and $this->tahun_anggaran != '') {
            $data = Anggaran::where('tahun_anggaran', $this->tahun_anggaran)
                ->get();
        } else {
            $data = Anggaran::all();
        }

        return $data;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    // public function collection()
    // {
    //     return $this->data;
    // }

    public function map($data): array
    {
        return [
            $data->unit,
            $data->tahun_anggaran,
            $data->nilai_anggaran
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Unit',
                'Tahun Anggaran',
                'Nilai Anggaran',
            ]
        ];
    }

    public function styles($sheet)
    {
        $centerAlignment = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ]
        ];

        $titleStyles = [
            'font' => [
                'bold' => true
            ],
        ] + $centerAlignment;

        return [
            1 => $titleStyles,
        ];
    }
}
