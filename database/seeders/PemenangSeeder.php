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
            'nama' => 'riski',
            'alamat' => 'paguyaman',
            'no_hp' => '08677761515163',
            'no_undian' => '1234',
            'hadiah' => 'roti coklat',
        ]);
    }
}
