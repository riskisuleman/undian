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
}
