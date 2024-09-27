<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HadiahUndian extends Model
{
    use HasFactory;

    protected $table = 'tb_hadiah_undian';

    protected $fillable = [
        'kode_hadiah_undian',
    ];

    public function undian()
    {
        return $this->belongsTo(Undian::class, 'id_undian');
    }

    public function hadiah()
    {
        return $this->belongsTo(Hadiah::class, 'id_hadiah');
    }

    public function peringkat()
    {
        return $this->belongsTo(Peringkat::class, 'id_peringkat');
    }
}
