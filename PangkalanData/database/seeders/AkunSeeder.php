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
                'email' => 'operator@gmail.com',
                'level' => 'operator',
                'password' => bcrypt('operator123')
            ],
            [
                'username' => 'validator',
                'name' => 'Akun Validator',
                'email' => 'validator@gmail.com',
                'level' => 'validator',
                'password' => bcrypt('validator123')
            ],
            [
                'username' => 'tamu',
                'name' => 'Akun Tamu',
                'email' => 'tamu@gmail.com',
                'level' => 'tamu',
                'password' => bcrypt('tamu123')
            ],
            [
                'username' => 'admin',
                'name' => 'Akun Admin',
                'email' => 'admin@gmail.com',
                'level' => 'admin',
                'password' => bcrypt('admin123')
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
