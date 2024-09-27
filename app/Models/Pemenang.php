<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemenang extends Model
{
    use HasFactory;

    protected $table = 'tb_pemenang';

    protected $fillable = [
        'id_peserta',
        'id_hadiah_undian',
    ];

    public function peserta()
    {
        return $this->belongsTo(Peserta::class, 'id_peserta');
    }

    public function hadiahUndian()
    {
        return $this->belongsTo(HadiahUndian::class, 'id_hadiah_undian');
    }
}
