<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriTokoh extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'kategori_tokoh';

    // Kolom yang bisa diisi
    protected $fillable = [
        'nama',
    ];

    // Menghapus penggunaan timestamps
    public $timestamps = false;

    // Relasi ke Testimoni
    public function testimoni()
    {
        return $this->hasMany(Testimoni::class);
    }
}
?>
