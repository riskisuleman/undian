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
        'no_hp',
        'no_undian',
    ];
}
