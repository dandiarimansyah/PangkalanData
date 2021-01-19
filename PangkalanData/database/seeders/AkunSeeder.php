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
            ]
        ];
        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
