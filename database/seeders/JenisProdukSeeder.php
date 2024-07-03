<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JenisProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jenis_produk')->insert([
            ['nama' => 'Elektronik', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Pakaian', 'created_at' => now(), 'updated_at' => now()],
            ['nama' => 'Makanan', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
