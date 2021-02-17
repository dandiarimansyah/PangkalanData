<?php

namespace App\Exports;

use App\Models\Pesuluh;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class PesuluhExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $tingkat;
    private $nama;
    private $instansi;

    public function __construct($tingkat, $nama, $instansi)
    {
        $this->tingkat = $tingkat;
        $this->nama = $nama;
        $this->instansi = $instansi;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->tingkat == '' and $this->nama == '' and $this->instansi == '') {
            $data = Pesuluh::all();
        } elseif ($this->tingkat != '' and $this->nama == '' and $this->instansi == '') {
            $data = Pesuluh::where('tingkat', $this->tingkat)
                ->get();
        } elseif ($this->tingkat == '' and $this->nama != '' and $this->instansi == '') {
            $data = Pesuluh::where('nama', 'like', '%' . $this->nama . '%')
                ->get();
        } elseif ($this->tingkat == '' and $this->nama == '' and $this->instansi != '') {
            $data = Pesuluh::where('instansi', 'like', '%' . $this->instansi . '%')
                ->get();
        } elseif ($this->tingkat != '' and $this->nama != '' and $this->instansi == '') {
            $data = Pesuluh::where('tingkat', $this->tingkat)
                ->where('nama', 'like', '%' . $this->nama . '%')
                ->get();
        } elseif ($this->tingkat != '' and $this->nama == '' and $this->instansi != '') {
            $data = Pesuluh::where('tingkat', $this->tingkat)
                ->where('instansi', 'like', '%' . $this->instansi . '%')
                ->get();
        } elseif ($this->tingkat == '' and $this->nama != '' and $this->instansi != '') {
            $data = Pesuluh::where('instansi', 'like', '%' . $this->instansi . '%')
                ->where('nama', 'like', '%' . $this->nama . '%')
                ->get();
        } elseif ($this->tingkat != '' and $this->nama != '' and $this->instansi != '') {
            $data = Pesuluh::where('tingkat', $this->tingkat)
                ->where('nama', 'like', '%' . $this->nama . '%')
                ->where('instansi', 'like', '%' . $this->instansi . '%')
                ->get();
        }

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->nama,
            $data->tempat_lahir,
            $data->tanggal_lahir,
            $data->instansi,
            $data->tingkat,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Nama',
                'Tempat Lahir',
                'Tanggal Lahir',
                'Instansi',
                'Tingkat',
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
