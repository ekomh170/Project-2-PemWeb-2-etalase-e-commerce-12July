<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimoni')->insert([
            [
                'tanggal' => '2023-06-15',
                'nama_tokoh' => 'Budi Anduk',
                'komentar' => 'Produknya Kurang Bagus',
                'rating' => 2,
                'produk_id' => 1,
                'kategori_tokoh_id' => 1
            ],
            [
                'tanggal' => '2023-06-20',
                'nama_tokoh' => 'Liliyana Natsir',
                'komentar' => 'Produknya Bagus',
                'rating' => 4,
                'produk_id' => 2,
                'kategori_tokoh_id' => 2
            ],
            [
                'tanggal' => '2023-06-25',
                'nama_tokoh' => 'Susi Pudjiastuti',
                'komentar' => 'Produknya Jelek, Tidak Sesuai Ekspektasi',
                'rating' => 3,
                'produk_id' => 3,
                'kategori_tokoh_id' => 3
            ],
            [
                'tanggal' => '2023-07-01',
                'nama_tokoh' => 'Najwa Shihab',
                'komentar' => 'Produk ini sangat berguna dan efisien.',
                'rating' => 5,
                'produk_id' => 4,
                'kategori_tokoh_id' => 1
            ],
            [
                'tanggal' => '2023-07-05',
                'nama_tokoh' => 'Raditya Dika',
                'komentar' => 'Cukup bagus, sesuai dengan harganya.',
                'rating' => 4,
                'produk_id' => 5,
                'kategori_tokoh_id' => 5
            ],
            [
                'tanggal' => '2023-07-10',
                'nama_tokoh' => 'Agnes Monica',
                'komentar' => 'Sangat memuaskan, melebihi ekspektasi saya.',
                'rating' => 5,
                'produk_id' => 6,
                'kategori_tokoh_id' => 6
            ],
            [
                'tanggal' => '2023-07-15',
                'nama_tokoh' => 'Nadiem Makarim',
                'komentar' => 'Produk ini memiliki kualitas yang sangat baik.',
                'rating' => 5,
                'produk_id' => 7,
                'kategori_tokoh_id' => 7
            ],
            [
                'tanggal' => '2023-07-20',
                'nama_tokoh' => 'Maudy Ayunda',
                'komentar' => 'Sangat tidak puas dengan produk ini.',
                'rating' => 2,
                'produk_id' => 8,
                'kategori_tokoh_id' => 8
            ],
            [
                'tanggal' => '2023-07-25',
                'nama_tokoh' => 'Joko Rahayu',
                'komentar' => 'Produk ini membantu saya dalam aktivitas sehari-hari.',
                'rating' => 4,
                'produk_id' => 9,
                'kategori_tokoh_id' => 1
            ],
            [
                'tanggal' => '2023-07-30',
                'nama_tokoh' => 'Raffi Ahmad',
                'komentar' => 'Produk ini sangat tidak direkomendasikan.',
                'rating' => 1,
                'produk_id' => 10,
                'kategori_tokoh_id' => 10
            ],
        ]);
    }
}
