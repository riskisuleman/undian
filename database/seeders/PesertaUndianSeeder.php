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
            'kode_peserta_undian' => 'k001',
            'tanggal' => '2024/09/26',
        ]);
    }
}
