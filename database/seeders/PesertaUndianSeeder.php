<?php

namespace Database\Seeders;

use App\Models\PesertaUndian;

use Illuminate\Database\Seeder;

class PesertaUndianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PesertaUndian::create([
            'id_undian' => 1,
            'id_peserta' => 1,
            'kode_peserta_undian' => 'SK01',
            'tanggal' => '2024-06-03',
        ]);
    }
}
