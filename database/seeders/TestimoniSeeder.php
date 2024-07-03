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
                'rating' => 5,
                'produk_id' => 1,
                'kategori_tokoh_id' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tanggal' => '2023-06-20',
                'nama_tokoh' => 'Liliyana Natsir',
                'rating' => 4,
                'produk_id' => 2,
                'kategori_tokoh_id' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'tanggal' => '2023-06-25',
                'nama_tokoh' => 'Susi Pudjiastuti',
                'rating' => 3,
                'produk_id' => 3,
                'kategori_tokoh_id' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
