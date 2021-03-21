<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'username' => 'operator',
                'name' => 'Akun Operator',
                'level' => 'operator',
                'password' => bcrypt('operator123')
            ],
            [
                'username' => 'validator',
                'name' => 'Akun Validator',
                'level' => 'validator',
                'password' => bcrypt('validator123')
            ],
            [
                'username' => 'tamu',
                'name' => 'Akun Tamu',
                'level' => 'tamu',
                'password' => bcrypt('tamu123')
            ],
            [
                'username' => 'admin',
                'name' => 'Akun Admin',
                'level' => 'admin',
                'password' => bcrypt('admin123')
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
