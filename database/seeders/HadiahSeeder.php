<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hadiah;

class HadiahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Hadiah::create([
            'nama_hadiah' => 'Mobil',
            'jumlah' => 1
        ]);

        // Tambahkan hadiah lainnya
    }
}
