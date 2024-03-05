<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'Admin',
            'nama_lengkap' => 'Zeyd Ali',
            'role' => 'Admin',
            'password' => bcrypt('123'),
        ]);

        User::create([
            'username' => 'User',
            'nama_lengkap' => 'User 1',
            'role' => 'User',
            'password' => bcrypt('123'),
        ]);
    }
}
