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
                'gambar_produk' => 'produk/produk_default.png',
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
                'gambar_produk' => 'produk/produk_default.png',
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
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 15000,
                'stok' => 300,
                'rating' => 3,
                'min_stok' => 30,
                'deskripsi' => 'Keripik singkong renyah dengan berbagai rasa',
                'jenis_produk_id' => 3
            ],
            [
                'kode' => 'ELE002',
                'nama' => 'Smartphone ABC',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 2000000,
                'stok' => 100,
                'rating' => 4,
                'min_stok' => 10,
                'deskripsi' => 'Smartphone dengan fitur canggih dan baterai tahan lama',
                'jenis_produk_id' => 1
            ],
            [
                'kode' => 'PAK002',
                'nama' => 'Kaos Motif',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 75000,
                'stok' => 200,
                'rating' => 5,
                'min_stok' => 20,
                'deskripsi' => 'Kaos motif dengan bahan katun yang nyaman',
                'jenis_produk_id' => 2
            ],
            [
                'kode' => 'MAK002',
                'nama' => 'Keripik Kentang',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 20000,
                'stok' => 300,
                'rating' => 3,
                'min_stok' => 30,
                'deskripsi' => 'Keripik kentang renyah dengan berbagai rasa',
                'jenis_produk_id' => 3
            ],
            [
                'kode' => 'ELE003',
                'nama' => 'Smartphone DEF',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 3000000,
                'stok' => 100,
                'rating' => 4,
                'min_stok' => 10,
                'deskripsi' => 'Smartphone dengan fitur canggih dan baterai tahan lama',
                'jenis_produk_id' => 1
            ],
            [
                'kode' => 'PAK003',
                'nama' => 'Kaos Warna-warni',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 60000,
                'stok' => 200,
                'rating' => 4,
                'min_stok' => 20,
                'deskripsi' => 'Kaos warna-warni dengan bahan katun yang nyaman',
                'jenis_produk_id' => 2
            ],
            [
                'kode' => 'MAK003',
                'nama' => 'Keripik Tempe',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 25000,
                'stok' => 300,
                'rating' => 3,
                'min_stok' => 30,
                'deskripsi' => 'Keripik tempe renyah dengan berbagai rasa',
                'jenis_produk_id' => 3
            ],
            [
                'kode' => 'ELE004',
                'nama' => 'Smartphone GHI',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 3500000,
                'stok' => 100,
                'rating' => 4,
                'min_stok' => 10,
                'deskripsi' => 'Smartphone dengan fitur canggih dan baterai tahan lama',
                'jenis_produk_id' => 1
            ],
            [
                'kode' => 'PAK004',
                'nama' => 'Kaos Batik',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 80000,
                'stok' => 200,
                'rating' => 5,
                'min_stok' => 20,
                'deskripsi' => 'Kaos batik dengan bahan katun yang nyaman',
                'jenis_produk_id' => 2
            ],
            [
                'kode' => 'MAK004',
                'nama' => 'Keripik Ubi',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 30000,
                'stok' => 300,
                'rating' => 3,
                'min_stok' => 30,
                'deskripsi' => 'Keripik ubi renyah dengan berbagai rasa',
                'jenis_produk_id' => 3
            ],
            [
                'kode' => 'ELE005',
                'nama' => 'Smartphone JKL',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 4000000,
                'stok' => 100,
                'rating' => 4,
                'min_stok' => 10,
                'deskripsi' => 'Smartphone dengan fitur canggih dan baterai tahan lama',
                'jenis_produk_id' => 1
            ],
            [
                'kode' => 'PAK005',
                'nama' => 'Kaos Lengan Panjang',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 90000,
                'stok' => 200,
                'rating' => 5,
                'min_stok' => 20,
                'deskripsi' => 'Kaos lengan panjang dengan bahan katun yang nyaman',
                'jenis_produk_id' => 2
            ],
            [
                'kode' => 'MAK005',
                'nama' => 'Keripik Jagung',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 35000,
                'stok' => 300,
                'rating' => 3,
                'min_stok' => 30,
                'deskripsi' => 'Keripik jagung renyah dengan berbagai rasa',
                'jenis_produk_id' => 3
            ],
            [
                'kode' => 'ELE006',
                'nama' => 'Smartphone MNO',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 4500000,
                'stok' => 100,
                'rating' => 4,
                'min_stok' => 10,
                'deskripsi' => 'Smartphone dengan fitur canggih dan baterai tahan lama',
                'jenis_produk_id' => 1
            ],
            [
                'kode' => 'PAK006',
                'nama' => 'Kaos V-Neck',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 95000,
                'stok' => 200,
                'rating' => 5,
                'min_stok' => 20,
                'deskripsi' => 'Kaos V-Neck dengan bahan katun yang nyaman',
                'jenis_produk_id' => 2
            ],
            [
                'kode' => 'MAK006',
                'nama' => 'Keripik Bayam',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 40000,
                'stok' => 300,
                'rating' => 3,
                'min_stok' => 30,
                'deskripsi' => 'Keripik bayam renyah dengan berbagai rasa',
                'jenis_produk_id' => 3
            ],
            [
                'kode' => 'ELE007',
                'nama' => 'Smartphone PQR',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 5000000,
                'stok' => 100,
                'rating' => 4,
                'min_stok' => 10,
                'deskripsi' => 'Smartphone dengan fitur canggih dan baterai tahan lama',
                'jenis_produk_id' => 1
            ],
            [
                'kode' => 'PAK007',
                'nama' => 'Kaos Raglan',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 100000,
                'stok' => 200,
                'rating' => 5,
                'min_stok' => 20,
                'deskripsi' => 'Kaos raglan dengan bahan katun yang nyaman',
                'jenis_produk_id' => 2
            ],
            [
                'kode' => 'MAK007',
                'nama' => 'Keripik Wortel',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 45000,
                'stok' => 300,
                'rating' => 3,
                'min_stok' => 30,
                'deskripsi' => 'Keripik wortel renyah dengan berbagai rasa',
                'jenis_produk_id' => 3
            ],
            [
                'kode' => 'ELE008',
                'nama' => 'Smartphone STU',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 5500000,
                'stok' => 100,
                'rating' => 4,
                'min_stok' => 10,
                'deskripsi' => 'Smartphone dengan fitur canggih dan baterai tahan lama',
                'jenis_produk_id' => 1
            ],
            [
                'kode' => 'PAK008',
                'nama' => 'Kaos Crop',
                'gambar_produk' => 'produk/produk_default.png',
                'harga' => 105000,
                'stok' => 200,
                'rating' => 5,
                'min_stok' => 20,
                'deskripsi' => 'Kaos crop dengan bahan katun yang nyaman',
                'jenis_produk_id' => 2
            ],
        ]);
    }
}
