<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\AkunSeeder;
use Database\Seeders\FotoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AkunSeeder::class);
        $this->call(FotoSeeder::class);
    }
}
