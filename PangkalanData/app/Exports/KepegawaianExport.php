<?php

namespace App\Exports;

use App\Models\Kepegawaian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class KepegawaianExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Kepegawaian::all();
    }

    public function map($data): array
    {
        return [
            $data->tanggal_diperbarui,
            // $data->unit,
            $data->semua_kelamin,
            $data->laki,
            $data->perempuan,
            $data->S3,
            $data->S2,
            $data->S1,
            $data->D3,
            $data->SMA,
            $data->SMP,
            $data->SD,
            $data->T_4E,
            $data->T_4D,
            $data->T_4C,
            $data->T_4B,
            $data->T_4A,
            $data->T_3D,
            $data->T_3C,
            $data->T_3B,
            $data->T_3A,
            $data->T_2D,
            $data->T_2C,
            $data->T_2B,
            $data->T_2A,
            $data->T_1D,
            $data->T_1C,
            $data->T_1B,
            $data->T_1A,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Tanggal Diperbarui',
                // 'Unit',
                'Jumlah Pegawai',
                'Laki-Laki',
                'Perempuan',
                'S3',
                'S2',
                'S1',
                'D3',
                'SMA',
                'SMP',
                'SD',
                'IV/e',
                'IV/d',
                'IV/c',
                'IV/b',
                'IV/a',
                'III/d',
                'III/c',
                'III/b',
                'III/a',
                'II/d',
                'II/c',
                'II/b',
                'II/a',
                'I/d',
                'I/c',
                'I/b',
                'I/a',
            ]
        ];
    }

    public function registerEvents(): array
    {

        $bold = [
            'font' => [
                'bold' => true
            ],
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];

        $center = [
            'alignment' => [
                'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
            ],
        ];

        return [
            AfterSheet::class => function (AfterSheet $event) use ($bold, $center) {
                $event->sheet->getStyle('A1:S1')->applyFromArray($bold);
            }
        ];
    }
}
