<?php

namespace App\Exports;

use App\Models\Musikalisasi_Puisi_Provinsi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class Musikalisasi_Puisi_ProvinsiExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $pemenang;
    private $tahun;

    public function __construct($pemenang, $tahun)
    {
        $this->pemenang = $pemenang;
        $this->tahun = $tahun;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->tahun == '' and $this->pemenang == '') {
            $data = Musikalisasi_Puisi_Provinsi::where('provinsi', $this->provinsi)
                ->get();
        } else if ($this->tahun != '' and $this->pemenang == '') {
            $data = Musikalisasi_Puisi_Provinsi::where('provinsi', $this->provinsi)
                ->where('tahun', $this->tahun)
                ->get();
        } else if ($this->tahun == '' and $this->pemenang != '') {
            $data = Musikalisasi_Puisi_Provinsi::where('provinsi', $this->provinsi)
                ->where('pemenang_1', $this->pemenang)
                ->orWhere('pemenang_2', $this->pemenang)
                ->orWhere('pemenang_3', $this->pemenang)
                ->get();
        } else {
            $data = Musikalisasi_Puisi_Provinsi::where('provinsi', $this->provinsi)
                ->where('tahun', $this->tahun)
                ->where('pemenang_1', $this->pemenang)
                ->orWhere('pemenang_2', $this->pemenang)
                ->orWhere('pemenang_3', $this->pemenang)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->provinsi,
            $data->tahun,
            $data->pemenang_1,
            $data->pemenang_2,
            $data->pemenang_3,
            $data->favorit,
            $data->keterangan,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Provinsi',
                'Tahun',
                'Pemenang 1',
                'Pemenang 2',
                'Pemenang 2',
                'Favorit',
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
