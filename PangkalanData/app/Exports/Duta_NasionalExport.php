<?php

namespace App\Exports;

use App\Models\Duta_Nasional;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class Duta_NasionalExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $tahun;
    private $pemenang;

    public function __construct($tahun, $pemenang)
    {
        $this->tahun = $tahun;
        $this->pemenang = $pemenang;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->tahun == '' and $this->pemenang == '') {
            $data = Duta_Nasional::all();
        } elseif ($this->tahun != '' and $this->pemenang == '') {
            $data = Duta_Nasional::where('tahun', $this->tahun)
                ->get();
        } elseif ($this->tahun == '' and $this->pemenang != '') {
            $data = Duta_Nasional::where('pemenang_1_1', $this->pemenang)
                ->orWhere('pemenang_1_2', $this->pemenang)
                ->orWhere('pemenang_2_1', $this->pemenang)
                ->orWhere('pemenang_2_2', $this->pemenang)
                ->orWhere('pemenang_3_1', $this->pemenang)
                ->orWhere('pemenang_3_2', $this->pemenang)
                ->get();
        } elseif ($this->tahun != '' and $this->pemenang != '') {
            $data = Duta_Nasional::where('tahun', $this->tahun)
                ->where('pemenang_1_1', $this->pemenang)
                ->orWhere('pemenang_1_2', $this->pemenang)
                ->orWhere('pemenang_2_1', $this->pemenang)
                ->orWhere('pemenang_2_2', $this->pemenang)
                ->orWhere('pemenang_3_1', $this->pemenang)
                ->orWhere('pemenang_3_2', $this->pemenang)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->tahun,
            $data->pemenang_1_1,
            $data->pemenang_1_2,
            $data->pemenang_2_1,
            $data->pemenang_2_2,
            $data->pemenang_3_1,
            $data->pemenang_3_2,
            $data->keterangan,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Tahun',
                'Pemenang I (1)',
                'Pemenang I (2)',
                'Pemenang II (1)',
                'Pemenang II (2)',
                'Pemenang III (1)',
                'Pemenang III (2)',
                'Keterangan',
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

    // public function styles($sheet)
    // {
    //     $sheet->setStyle(array(
    //         'aligment' => array(
    //             'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
    //         )
    //     ));
    // }
}
