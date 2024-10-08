<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    use HasFactory;

    protected $table = 'tb_hadiah';

    protected $fillable = [
        'nama_hadiah',
        'gambar_hadiah',
        'total',
    ];
}
