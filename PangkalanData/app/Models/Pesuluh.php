<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesuluh extends Model
{
    use HasFactory;
    protected $table = "pesuluh";

    protected $fillable = ['nama', 'tempat_lahir', 'tanggal_lahir', 'instansi', 'tingkat', 'id_penyuluhan', 'validasi'];

    public function penyuluhan()
    {
        return $this->belongsTo(Penyuluhan::class, 'id_penyuluhan', 'id');
    }
}
