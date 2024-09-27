<?php

namespace Database\Seeders;

use App\Models\Peserta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peserta::create([
            'nama' => 'riski',
            'alamat' => 'paguyaman',
            'no_hp' => '08677761515163',
            'no_undian' => '1234',

        ]);
    }
}
