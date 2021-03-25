<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penelitian extends Model
{
    use HasFactory;

    protected $table = "penelitian";

    protected $fillable = ['kategori', 'peneliti', 'judul', 'kerja_sama', 'tanggal_awal', 'tanggal_akhir', 'lama_penelitian', 'publikasi', 'tahun_terbit', 'abstrak', 'media', 'validasi'];
}
