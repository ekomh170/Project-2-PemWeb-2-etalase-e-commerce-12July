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
                'rating' => 5,
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
            ]
        ]);
    }
}
