<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Undian extends Model
{
    use HasFactory;

    protected $table = 'tb_undian';

    protected $fillable = [
        'user_id',
        'tmt_undian',
        'tst_undian'
    ];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
