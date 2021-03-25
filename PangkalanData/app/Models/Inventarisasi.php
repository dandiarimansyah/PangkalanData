<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventarisasi extends Model
{
    use HasFactory;

    protected $table = "inventarisasi";

    protected $fillable = ['tahun_anggaran', 'laptop', 'komputer', 'printer', 'fotocopy', 'faximili', 'LCD', 'TV', 'lain-lain', 'furniture', 'roda_dua', 'roda_empat', 'roda_enam', 'validasi'];
}
