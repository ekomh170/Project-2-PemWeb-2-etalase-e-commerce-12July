<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'produk';

    // Kolom yang bisa diisi
    protected $fillable = [
        'kode',
        'nama',
        'harga',
        'gambar_produk',
        'stok',
        'rating',
        'min_stok',
        'deskripsi',
        'jenis_produk_id',
    ];

    // Menghapus penggunaan timestamps
    public $timestamps = false;

    // Relasi ke JenisProduk
    public function jenisProduk()
    {
        return $this->belongsTo(JenisProduk::class);
    }

    // Relasi ke Testimoni
    public function testimoni()
    {
        return $this->hasMany(Testimoni::class);
    }
}
?>
