<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Foto;

class FotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foto = [
            [
                'gambar' => 'foto_login.jpg'
            ],
            [
                'gambar' => 'foto_beranda_1.jpg'
            ],
            [
                'gambar' => 'foto_beranda_2.jpg'
            ],
            [
                'gambar' => 'foto_beranda_3.jpg'
            ],
        ];
        foreach ($foto as $key => $value) {
            Foto::create($value);
        }
    }
}
