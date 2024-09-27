<?php

namespace Database\Seeders;

use App\Models\Pemenang;
use Illuminate\Database\Seeder;

class PemenangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pemenang::create([
            'id_peserta' => 1,
            'id_hadiah_undian' => 1,
        ]);
    }
}
