<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimoni extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'testimoni';

    // Kolom yang bisa diisi
    protected $fillable = [
        'tanggal',
        'nama_tokoh',
        'komentar',
        'rating',
        'produk_id',
        'kategori_tokoh_id',
    ];

    // Menghapus penggunaan timestamps
    public $timestamps = false;

    // Relasi ke Produk
    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }

    // Relasi ke KategoriTokoh
    public function kategoriTokoh()
    {
        return $this->belongsTo(KategoriTokoh::class);
    }
}
?>
