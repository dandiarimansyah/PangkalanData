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
                'gambar' => 'balai_fix.jpg'
            ],
            [
                'gambar' => 'balai.jpg'
            ],
            [
                'gambar' => 'balai2.jpg'
            ],
            [
                'gambar' => 'balai3.jpg'
            ],
        ];
        foreach ($foto as $key => $value) {
            Foto::create($value);
        }
    }
}
