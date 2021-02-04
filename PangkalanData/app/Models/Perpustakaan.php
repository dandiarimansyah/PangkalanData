<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perpustakaan extends Model
{
    use HasFactory;

    protected $table = "perpustakaan";

    protected $fillable = ['provinsi', 'unit', 'jumlah_buku', 'jumlah_judul', 'jenis_buku', 'jumlah_pengunjung', 'sumber_data', 'validasi'];
}
