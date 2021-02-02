<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penghargaan_Sastra extends Model
{
    use HasFactory;

    protected $table = "penghargaan_sastra";

    protected $fillable = ['kategori', 'tahun', 'deskripsi'];
}
