<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            JenisProdukSeeder::class,
            KategoriTokohSeeder::class,
            ProdukSeeder::class,
            TestimoniSeeder::class,
            UsersTableSeeder::class,
            ProfilesTableSeeder::class,
        ]);
    }
}
