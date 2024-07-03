<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Eko Muchamad Haryono',
                'email' => 'eko@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Muhamad Sayyid Fadhil',
                'email' => 'fadhil@example.com',
                'password' => Hash::make('password'),
                'role' => 'member',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Yasser Fajar Purwawiwaha',
                'email' => 'yasser@example.com',
                'password' => Hash::make('password'),
                'role' => 'member',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Zaky Muhammad Hafizh',
                'email' => 'zaky@example.com',
                'password' => Hash::make('password'),
                'role' => 'member',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'Liza Azzahra Cantika',
                'email' => 'liza@example.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
