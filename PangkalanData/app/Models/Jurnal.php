<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnal extends Model
{
    use HasFactory;

    protected $table = "jurnal";

    protected $fillable = ['kategori', 'judul', 'tim_redaksi', 'volume', 'no_issn', 'lingkup', 'penerbit', 'keterangan', 'info_produk', 'validasi'];
}
