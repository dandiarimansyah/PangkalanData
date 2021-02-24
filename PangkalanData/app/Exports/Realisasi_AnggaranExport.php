<?php

namespace App\Exports;

use App\Models\Realisasi_Anggaran;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class Realisasi_AnggaranExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
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
            $data = Realisasi_Anggaran::where('tahun_anggaran', $this->tahun_anggaran)
                ->get();
        } else {
            $data = Realisasi_Anggaran::all();
        }

        return $data;
    }

    public function map($data): array
    {
        return [
            // $data->unit,
            $data->nilai_realisasi,
            $data->besar_dana,
            $data->keterangan,
        ];
    }

    public function headings(): array
    {
        return [
            [
                // 'Unit',
                'Nilai Realisasi',
                'Besar Dana',
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
