<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'tb_peserta';

    protected $fillable = [
        'undian_id',
        'kd_peserta',
        'no_undian',
        'tanggal',
    ];

    public function undian()
    {
        return $this->belongsTo(Undian::class, 'undian_id');
    }
}
