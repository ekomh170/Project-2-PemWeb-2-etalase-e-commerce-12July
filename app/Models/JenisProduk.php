<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisProduk extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'jenis_produk';

    // Kolom yang bisa diisi
    protected $fillable = [
        'nama',
    ];

    // Menghapus penggunaan timestamps
    public $timestamps = false;

    // Relasi ke Produk
    public function produk()
    {
        return $this->hasMany(Produk::class);
    }
}
?>
