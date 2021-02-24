<?php

namespace App\Exports;

use App\Models\Penelitian;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class PenelitianExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $tahun_terbit;
    private $judul;
    private $peneliti;
    private $abstrak;

    public function __construct($tahun_terbit, $judul, $peneliti, $abstrak)
    {
        $this->tahun_terbit = $tahun_terbit;
        $this->judul = $judul;
        $this->peneliti = $peneliti;
        $this->abstrak = $abstrak;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->tahun_terbit == '' and $this->judul == '' and $this->peneliti == '' and $this->abstrak == '') {
            $data = Penelitian::all();
        } elseif ($this->tahun_terbit != '' and $this->judul != '' and $this->peneliti != '' and $this->abstrak != '') {
            $data = Penelitian::where('tahun_terbit', $this->tahun_terbit)
                ->where('judul', 'like', '%' . $this->judul . '%')
                ->where('peneliti', $this->peneliti)
                ->where('abstrak', 'like', '%' . $this->abstrak . '%')
                ->get();
        } elseif ($this->tahun_terbit != '' and $this->judul == '' and $this->peneliti == '' and $this->abstrak == '') {
            $data = Penelitian::where('tahun_terbit', $this->tahun_terbit)
                ->get();
        } elseif ($this->judul != '' and $this->tahun_terbit == '' and $this->peneliti == '' and $this->abstrak == '') {
            $data = Penelitian::where('judul', 'like', '%' . $this->judul . '%')
                ->get();
        } elseif ($this->peneliti != '' and $this->judul == '' and $this->tahun_terbit == '' and $this->abstrak == '') {
            $data = Penelitian::where('peneliti', $this->peneliti)
                ->get();
        } elseif ($this->abstrak != '' and $this->judul == '' and $this->peneliti == '' and $this->tahun_terbit == '') {
            $data = Penelitian::where('abstrak', 'like', '%' . $this->abstrak . '%')
                ->get();
        } elseif ($this->tahun_terbit != '' and $this->judul != '' and $this->peneliti == '' and $this->abstrak == '') {
            $data = Penelitian::where('tahun_terbit', $this->tahun_terbit)
                ->where('judul', 'like', '%' . $this->judul . '%')
                ->get();
        } elseif ($this->tahun_terbit != '' and $this->peneliti != '' and $this->judul == '' and $this->abstrak == '') {
            $data = Penelitian::where('tahun_terbit', $this->tahun_terbit)
                ->where('peneliti', $this->peneliti)
                ->get();
        } elseif ($this->tahun_terbit != '' and $this->abstrak != '' and $this->peneliti == '' and $this->judul == '') {
            $data = Penelitian::where('tahun_terbit', $this->tahun_terbit)
                ->where('abstrak', 'like', '%' . $this->abstrak . '%')
                ->get();
        } elseif ($this->judul != '' and $this->peneliti != '' and $this->tahun_terbit == '' and $this->abstrak == '') {
            $data = Penelitian::where('judul', 'like', '%' . $this->judul . '%')
                ->where('peneliti', $this->peneliti)
                ->get();
        } elseif ($this->judul != '' and $this->abstrak != '' and $this->tahun_terbit == '' and $this->peneliti == '') {
            $data = Penelitian::where('judul', 'like', '%' . $this->judul . '%')
                ->where('abstrak', 'like', '%' . $this->abstrak . '%')
                ->get();
        } elseif ($this->peneliti != '' and $this->abstrak != '' and $this->tahun_terbit == '' and $this->judul == '') {
            $data = Penelitian::where('peneliti', $this->peneliti)
                ->where('abstrak', 'like', '%' . $this->abstrak . '%')
                ->get();
        } elseif ($this->tahun_terbit != '' and $this->judul != '' and $this->peneliti != '' or $this->abstrak == '') {
            $data = Penelitian::where('tahun_terbit', $this->tahun_terbit)
                ->where('judul', 'like', '%' . $this->judul . '%')
                ->where('peneliti', $this->peneliti)
                ->orWhere('abstrak', 'like', '%' . $this->abstrak . '%')
                ->get();
        } elseif ($this->tahun_terbit != '' or $this->judul != '' and $this->peneliti != '' and $this->abstrak == '') {
            $data = Penelitian::where('peneliti', $this->peneliti)
                ->where('abstrak', 'like', '%' . $this->abstrak . '%')
                ->where('tahun_terbit', $this->tahun_terbit)
                ->orWhere('judul', 'like', '%' . $this->judul . '%')
                ->get();
        }

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->kategori,
            // $data->unit,
            $data->peneliti,
            $data->judul,
            $data->kerja_sama,
            $data->tanggal_awal,
            $data->tanggal_akhir,
            $data->lama_penelitian + '' + $data->tipe_waktu,
            $data->publikasi,
            $data->tahun_terbit,
            $data->abstrak,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Kategori',
                // 'Unit',
                'Peneliti',
                'Judul',
                'Kerja Sama',
                'Tgl Awal Penelitian',
                'Tgl Selesai Penelitian',
                'Publikasi',
                'Tahun Terbit',
                'Abstrak',
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
