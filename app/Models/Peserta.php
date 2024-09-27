<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'tb_peserta';

    protected $fillable = [
        'nama',
        'alamat',
        'no hp',
        'no undian',
    ];

    public function pesertaUndian()
    {
        return $this->hasMany(PesertaUndian::class, 'id_peserta');
    }
}
