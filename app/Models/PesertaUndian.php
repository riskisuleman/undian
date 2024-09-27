<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaUndian extends Model
{

    use HasFactory;

    protected $table = 'tb_peserta_undian';

    protected $fillable = [
        'id_undian',
        'id_peserta',
        'kode_peserta_undian',
        'tanggal',
    ];

    public function undian()
    {
        return $this->belongsTo(Undian::class, 'id_undian');
    }

    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_peserta');
    }
}

