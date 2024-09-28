<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HadiahUndian extends Model
{
    use HasFactory;

    protected $table = 'tb_hadiah_undian';

    protected $fillable = [
        'undian_id',
        'hadiah_id',
        'peringkat_id',
        'kd_hadiah'
    ];

    public function undian()
    {
        return $this->belongsTo(Undian::class, 'undian_id');
    }

    public function hadiah()
    {
        return $this->belongsTo(Hadiah::class, 'hadiah_id');
    }

    public function peringkat()
    {
        return $this->belongsTo(Peringkat::class, 'peringkat_id');
    }
}
