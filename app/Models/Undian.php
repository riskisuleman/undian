<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undian extends Model
{
    use HasFactory;

    protected $table = 'tb_undian';

    protected $fillable = [
        'nama_undian',
        'tmt_undian',
        'tst_undian'

    ];

    public function pesertaUndian()
    {
        return $this->hasMany(PesertaUndian::class, 'id_undian');
    }

    public function hadiahUndian()
    {
        return $this->hasMany(HadiahUndian::class, 'id_undian');
    }
}
