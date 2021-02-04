<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamus extends Model
{
    use HasFactory;

    protected $table = "kamus";

    protected $fillable = ['kategori', 'judul', 'tim_redaksi', 'edisi', 'no_isbn', 'lingkup', 'penerbit', 'tahun_terbit', 'keterangan', 'info_produk', 'validasi'];
}
