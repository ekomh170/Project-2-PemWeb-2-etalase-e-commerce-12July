<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produk')->insert([
            [
                'kode' => 'ELE001',
                'nama' => 'Smartphone XYZ',
                'harga' => 2500000,
                'stok' => 100,
                'rating' => 4,
                'min_stok' => 10,
                'deskripsi' => 'Smartphone dengan fitur canggih dan baterai tahan lama',
                'jenis_produk_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode' => 'PAK001',
                'nama' => 'Kaos Polos',
                'harga' => 50000,
                'stok' => 200,
                'rating' => 5,
                'min_stok' => 20,
                'deskripsi' => 'Kaos polos dengan bahan katun yang nyaman',
                'jenis_produk_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'kode' => 'MAK001',
                'nama' => 'Keripik Singkong',
                'harga' => 15000,
                'stok' => 300,
                'rating' => 3,
                'min_stok' => 30,
                'deskripsi' => 'Keripik singkong renyah dengan berbagai rasa',
                'jenis_produk_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
