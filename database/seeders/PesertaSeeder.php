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
            'undian_id' => 1,
            'kd_peserta' => 'KS01',
            'no_undian' => "01",
            'tanggal' => '2024-02-05',
        ]);
    }
}
