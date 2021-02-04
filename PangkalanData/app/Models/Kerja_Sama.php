<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerja_Sama extends Model
{
    use HasFactory;

    protected $table = "kerja_sama";

    protected $fillable = ['kategori', 'instansi', 'tanggal_awal', 'tanggal_akhir', 'nomor', 'perihal', 'keterangan', 'ttd_1', 'instansi_1', 'ttd_2', 'instansi_2', 'validasi'];
}
