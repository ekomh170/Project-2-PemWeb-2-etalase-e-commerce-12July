<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    /**
     * Atribut yang dapat diisi secara massal.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'alamat',
        'nomer_hp',
        'tanggal_lahir',
        'foto',
        'jenis_kelamin',
        'bio',
        'website',
        'hobi',
        'linkedin',
    ];

    /**
     * Mendapatkan pengguna yang memiliki profil ini.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
?>
