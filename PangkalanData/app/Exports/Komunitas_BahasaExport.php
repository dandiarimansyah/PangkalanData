<?php

namespace App\Exports;

use App\Models\Komunitas_Bahasa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class Komunitas_BahasaExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $kota;
    private $nama_komunitas;
    private $alamat;

    public function __construct($kota, $nama_komunitas, $alamat)
    {
        $this->kota = $kota;
        $this->nama_komunitas = $nama_komunitas;
        $this->alamat = $alamat;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->kota == '' and $this->nama_komunitas == '' and $this->alamat == '') {
            $data = Komunitas_Bahasa::all();
        } elseif ($this->kota != '' and $this->nama_komunitas == '' and $this->alamat == '') {
            $data = Komunitas_Bahasa::where('kota', $this->kota)
                ->get();
        } elseif ($this->kota == '' and $this->nama_komunitas != '' and $this->alamat == '') {
            $data = Komunitas_Bahasa::where('nama_komunitas', $this->nama_komunitas)
                ->get();
        } elseif ($this->kota == '' and $this->nama_komunitas == '' and $this->alamat != '') {
            $data = Komunitas_Bahasa::where('alamat', $this->alamat)
                ->get();
        } elseif ($this->kota != '' and $this->nama_komunitas != '' and $this->alamat == '') {
            $data = Komunitas_Bahasa::where('kota', $this->kota)
                ->where('nama_komunitas', $this->nama_komunitas)
                ->get();
        } elseif ($this->kota != '' and $this->nama_komunitas == '' and $this->alamat != '') {
            $data = Komunitas_Bahasa::where('kota', $this->kota)
                ->where('alamat', $this->alamat)
                ->get();
        } elseif ($this->kota == '' and $this->nama_komunitas != '' and $this->alamat != '') {
            $data = Komunitas_Bahasa::where('alamat', $this->alamat)
                ->where('nama_komunitas', $this->nama_komunitas)
                ->get();
        } elseif ($this->kota != '' and $this->nama_komunitas != '' and $this->alamat != '') {
            $data = Komunitas_Bahasa::where('kota', $this->kota)
                ->where('nama_komunitas', $this->nama_komunitas)
                ->where('alamat', $this->alamat)
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->nama_komunitas,
            $data->kota,
            $data->kecamatan,
            $data->alamat,
            $data->koordinat,
            $data->keterangan,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Nama Komunitas',
                'Kota',
                'Kecamatan',
                'Alamat',
                'Koordinat',
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
