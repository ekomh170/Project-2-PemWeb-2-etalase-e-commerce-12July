<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            [
                'user_id' => 1,
                'alamat' => 'Jawa Barat, Indonesia',
                'nomer_hp' => '081234567890',
                'tanggal_lahir' => '2003-03-29',
                'foto' => 'profile/profile_kreator.png',
                'jenis_kelamin' => 'Laki-Laki',
                'bio' => 'Software engineer and tech enthusiast',
                'website' => 'https://eko.example.com',
                'hobi' => 'Membaca, Coding',
                'linkedin' => 'https://www.linkedin.com/in/eko-haryono-290/',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 2,
                'alamat' => 'Jawa Barat, Indonesia',
                'nomer_hp' => '082345678901',
                'tanggal_lahir' => '2004-02-15',
                'foto' => 'profile/profile_default.png',
                'jenis_kelamin' => 'Laki-Laki',
                'bio' => 'Software engineer and tech enthusiast',
                'website' => 'https://fadhil.example.com',
                'hobi' => 'Traveling, Hiking',
                'linkedin' => 'https://www.linkedin.com/in/fadhil',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 3,
                'alamat' => 'Jawa Barat, Indonesia',
                'nomer_hp' => '083456789012',
                'tanggal_lahir' => '2003-03-30',
                'foto' => 'profile/profile_default.png',
                'jenis_kelamin' => 'Laki-Laki',
                'bio' => 'Graphic designer and artist',
                'website' => 'https://yaser.example.com',
                'hobi' => 'Melukis, Menggambar',
                'linkedin' => 'https://www.linkedin.com/in/yaser',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 4,
                'alamat' => 'Jawa Barat, Indonesia',
                'nomer_hp' => '084567890123',
                'tanggal_lahir' => '2005-07-21',
                'foto' => 'profile/profile_default.png',
                'jenis_kelamin' => 'Laki-Laki',
                'bio' => 'Marketing specialist and public speaker',
                'website' => 'https://zaky.example.com',
                'hobi' => 'Public speaking, Blogging',
                'linkedin' => 'https://www.linkedin.com/in/zaky',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'user_id' => 5,
                'alamat' => 'Jawa Timur, Indonesia',
                'nomer_hp' => '085678901234',
                'tanggal_lahir' => '2003-09-10',
                'foto' => 'profile/profile_default.png',
                'jenis_kelamin' => 'Perempuan',
                'bio' => 'Content creator and social media influencer',
                'website' => 'https://lizana.example.com',
                'hobi' => 'Vlogging, Fotografi',
                'linkedin' => 'https://www.linkedin.com/in/lizana',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
