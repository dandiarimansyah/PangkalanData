<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Terbitan_Umum extends Model
{
    use HasFactory;

    protected $table = "terbitan_umum";

    protected $fillable = ['kategori', 'judul', 'penulis', 'no_isbn', 'tahun_terbit', 'deskripsi', 'info_produk', 'media', 'validasi'];
}
