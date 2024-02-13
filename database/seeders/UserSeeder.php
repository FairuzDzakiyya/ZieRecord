<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $user = [
            [
                'name' => 'mimin',
                'email' => 'mimin@gmail.com',
                'password' => bcrypt('a'),
            ],
            [
                'name' => 'admin',
                'email' => 'operator@gmail.com',
                'password' => bcrypt('a'),
            ],
            [
                'name' => 'admin',
                'email' => 'owner@gmail.com',
                'password' => bcrypt('a'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
