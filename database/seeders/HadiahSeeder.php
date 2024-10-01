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
            'nama_hadiah' => '1 Unit Sepeda Motor',
            'gambar_Hadiah' => 'motor.jpg',
            'total' => '10',
        ]);
    }
}
