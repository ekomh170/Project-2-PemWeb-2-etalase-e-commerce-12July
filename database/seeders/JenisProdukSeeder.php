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
            ['nama' => 'Elektronik'],
            ['nama' => 'Pakaian'],
            ['nama' => 'Makanan'],
            ['nama' => 'Peralatan Rumah Tangga'],
            ['nama' => 'Kosmetik'],
            ['nama' => 'Olahraga'],
            ['nama' => 'Buku'],
            ['nama' => 'Mainan'],
            ['nama' => 'Otomotif'],
            ['nama' => 'Peralatan Kantor'],
        ]);
    }
}
