<?php

namespace Database\Seeders;

use App\Models\Undian;

use Illuminate\Database\Seeder;

class UndianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Undian::create([
            'nama_undian' => 'riski kondengis',
            'kode_peserta_undian' => 'k001',
        ]);
    }
}
