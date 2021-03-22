<?php

namespace App\Exports;

use App\Models\Anggaran;

use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class AnggaranExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
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
        $data = $data->where('validasi', 'sudah');

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->tahun_anggaran,
            $data->nilai_anggaran
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Tahun Anggaran',
                'Nilai Anggaran',
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
                $event->sheet->getStyle('A1:C1')->applyFromArray($bold);
            }
        ];
    }
}
