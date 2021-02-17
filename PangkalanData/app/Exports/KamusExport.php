<?php

namespace App\Exports;

use App\Models\Kamus;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class KamusExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $info_produk;
    private $judul;
    private $tim_redaksi;
    private $kategori;

    public function __construct($info_produk, $judul, $tim_redaksi, $kategori)
    {
        $this->info_produk = $info_produk;
        $this->judul = $judul;
        $this->tim_redaksi = $tim_redaksi;
        $this->kategori = $kategori;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->info_produk == '' and $this->judul == '' and $this->tim_redaksi == '') {
            $data = Kamus::where('kategori', $this->kategori)
                ->get();
        } elseif ($this->info_produk != '' and $this->judul == '' and $this->tim_redaksi == '') {
            $data = Kamus::where('kategori', $this->kategori)
                ->where('info_produk', $this->info_produk)
                ->get();
        } elseif ($this->info_produk == '' and $this->judul != '' and $this->tim_redaksi == '') {
            $data = Kamus::where('kategori', $this->kategori)
                ->where('judul', $this->judul)
                ->get();
        } elseif ($this->info_produk == '' and $this->judul == '' and $this->tim_redaksi != '') {
            $data = Kamus::where('kategori', $this->kategori)
                ->where('tim_redaksi', $this->tim_redaksi)
                ->get();
        } elseif ($this->info_produk != '' and $this->judul != '' and $this->tim_redaksi == '') {
            $data = Kamus::where('kategori', $this->kategori)
                ->where('info_produk', $this->info_produk)
                ->where('judul', $this->judul)
                ->get();
        } elseif ($this->info_produk != '' and $this->judul == '' and $this->tim_redaksi != '') {
            $data = Kamus::where('kategori', $this->kategori)
                ->where('info_produk', $this->info_produk)
                ->where('tim_redaksi', $this->tim_redaksi)
                ->get();
        } elseif ($this->info_produk == '' and $this->judul != '' and $this->tim_redaksi != '') {
            $data = Kamus::where('kategori', $this->kategori)
                ->where('tim_redaksi', $this->tim_redaksi)
                ->where('judul', $this->judul)
                ->get();
        } elseif ($this->info_produk != '' and $this->judul != '' and $this->tim_redaksi != '') {
            $data = Kamus::where('kategori', $this->kategori)
                ->where('info_produk', $this->info_produk)
                ->where('judul', $this->judul)
                ->where('tim_redaksi', $this->tim_redaksi)
                ->get();
        }

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->provinsi,
            $data->kota,
            $data->tanggal_awal_pelaksanaan,
            $data->tanggal_akhir_pelaksanaan,
            $data->nama_kegiatan,
            $data->pemateri,
            $data->jumlah_peserta,
            $data->jumlah_sekolah_yang_dibina,
            $data->nama_sekolah_yang_dibina,
            $data->aktivitas,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Provinsi',
                'Kota',
                'Tanggal Awal',
                'Tanggal Akhir',
                'Nama Kegiatan',
                'Pemateri',
                'Jumlah Peserta',
                'Jumlah Sekolah Binaan',
                'Nama Sekolah Binaan',
                'Aktivitas',
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
