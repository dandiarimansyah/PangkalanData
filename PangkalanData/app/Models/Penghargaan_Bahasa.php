<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan_Bahasa extends Model
{
    use HasFactory;

    protected $table = "penghargaan_bahasa";

    protected $fillable = ['kategori', 'tahun', 'deskripsi', 'media', 'validasi'];
}
