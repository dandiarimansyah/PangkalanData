<?php

namespace App\Exports;

use App\Models\Terbitan_Umum;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithStyles;

class Terbitan_UmumExport implements FromCollection, WithMapping, WithHeadings, ShouldAutoSize, WithEvents
{
    private $info_produk;
    private $judul;
    private $penulis;
    private $kategori;

    public function __construct($info_produk, $judul, $penulis, $kategori)
    {
        $this->info_produk = $info_produk;
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->kategori = $kategori;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->info_produk == '' and $this->judul == '' and $this->penulis == '' and $this->kategori == '') {
            $data = Terbitan_Umum::all();
        } elseif ($this->info_produk != '' and $this->judul != '' and $this->penulis != '' and $this->kategori != '') {
            $data = Terbitan_Umum::where('info_produk', $this->info_produk)
                ->where('judul', 'like', '%' . $this->judul . '%')
                ->where('penulis', $this->penulis)
                ->where('kategori', $this->kategori)
                ->get();
        } elseif ($this->info_produk != '' and $this->judul == '' and $this->penulis == '' and $this->kategori == '') {
            $data = Terbitan_Umum::where('info_produk', $this->info_produk)
                ->get();
        } elseif ($this->judul != '' and $this->info_produk == '' and $this->penulis == '' and $this->kategori == '') {
            $data = Terbitan_Umum::where('judul', 'like', '%' . $this->judul . '%')
                ->get();
        } elseif ($this->penulis != '' and $this->judul == '' and $this->info_produk == '' and $this->kategori == '') {
            $data = Terbitan_Umum::where('penulis', $this->penulis)
                ->get();
        } elseif ($this->kategori != '' and $this->judul == '' and $this->penulis == '' and $this->info_produk == '') {
            $data = Terbitan_Umum::where('kategori', $this->kategori)
                ->get();
        } elseif ($this->info_produk != '' and $this->judul != '' and $this->penulis == '' and $this->kategori == '') {
            $data = Terbitan_Umum::where('info_produk', $this->info_produk)
                ->where('judul', 'like', '%' . $this->judul . '%')
                ->get();
        } elseif ($this->info_produk != '' and $this->penulis != '' and $this->judul == '' and $this->kategori == '') {
            $data = Terbitan_Umum::where('info_produk', $this->info_produk)
                ->where('penulis', $this->penulis)
                ->get();
        } elseif ($this->info_produk != '' and $this->kategori != '' and $this->penulis == '' and $this->judul == '') {
            $data = Terbitan_Umum::where('info_produk', $this->info_produk)
                ->where('kategori', $this->kategori)
                ->get();
        } elseif ($this->judul != '' and $this->penulis != '' and $this->info_produk == '' and $this->kategori == '') {
            $data = Terbitan_Umum::where('judul', 'like', '%' . $this->judul . '%')
                ->where('penulis', $this->penulis)
                ->get();
        } elseif ($this->judul != '' and $this->kategori != '' and $this->info_produk == '' and $this->penulis == '') {
            $data = Terbitan_Umum::where('judul', 'like', '%' . $this->judul . '%')
                ->where('kategori', $this->kategori)
                ->get();
        } elseif ($this->penulis != '' and $this->kategori != '' and $this->info_produk == '' and $this->judul == '') {
            $data = Terbitan_Umum::where('penulis', $this->penulis)
                ->where('kategori', $this->kategori)
                ->get();
        } elseif ($this->info_produk != '' and $this->judul != '' and $this->penulis != '' or $this->kategori == '') {
            $data = Terbitan_Umum::where('info_produk', $this->info_produk)
                ->where('judul', 'like', '%' . $this->judul . '%')
                ->where('penulis', $this->penulis)
                ->orWhere('kategori', 'like', '%' . $this->kategori . '%')
                ->get();
        } elseif ($this->info_produk != '' or $this->judul != '' and $this->penulis != '' and $this->kategori == '') {
            $data = Terbitan_Umum::where('penulis', $this->penulis)
                ->where('kategori', $this->kategori)
                ->where('info_produk', $this->info_produk)
                ->orWhere('judul', 'like', '%' . $this->judul . '%')
                ->get();
        }
        $data = $data->where('validasi', 'sudah');

        return $data;
    }

    public function map($data): array
    {
        return [
            $data->kategori,
            $data->judul,
            $data->penulis,
            $data->no_isbn,
            $data->tahun_terbit,
            $data->deskripsi,
            $data->info_produk,
        ];
    }

    public function headings(): array
    {
        return [
            [
                'Kategori',
                'Judul',
                'Penulis',
                'No ISBN',
                'Tahun Terbit',
                'Deskripsi Fisik',
                'Info Produk',
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
