<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriTokohSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori_tokoh')->insert([
            ['nama' => 'Artis', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Atlet', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Politisi', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
