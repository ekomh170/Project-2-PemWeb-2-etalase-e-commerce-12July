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
                'gambar_produk' => 'smartphone-xyz.jpg',
                'harga' => 2500000,
                'stok' => 100,
                'rating' => 4,
                'min_stok' => 10,
                'deskripsi' => 'Smartphone dengan fitur canggih dan baterai tahan lama',
                'jenis_produk_id' => 1
            ],
            [
                'kode' => 'PAK001',
                'nama' => 'Kaos Polos',
                'gambar_produk' => 'kaos-polos.jpg',
                'harga' => 50000,
                'stok' => 200,
                'rating' => 5,
                'min_stok' => 20,
                'deskripsi' => 'Kaos polos dengan bahan katun yang nyaman',
                'jenis_produk_id' => 2
            ],
            [
                'kode' => 'MAK001',
                'nama' => 'Keripik Singkong',
                'gambar_produk' => 'keripik-singkong.jpg',  
                'harga' => 15000,
                'stok' => 300,
                'rating' => 3,
                'min_stok' => 30,
                'deskripsi' => 'Keripik singkong renyah dengan berbagai rasa',
                'jenis_produk_id' => 3
            ]
        ]);
    }
}
