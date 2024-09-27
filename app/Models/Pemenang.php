<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemenang extends Model
{
    use HasFactory;

    protected $table = 'tb_pemenang';

    protected $fillable = [
        'kode_peserta_undian',
        'kode_hadiah_undian',
    ];

    public function pesertaUndian()
    {
        return $this->belongsTo(PesertaUndian::class, 'kode_peserta_undian', 'kode_peserta_undian');
    }

    public function hadiahUndian()
    {
        return $this->belongsTo(HadiahUndian::class, 'kode_hadiah_undian', 'kode_hadiah_undian');
    }
}
