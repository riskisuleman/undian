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
            'url_Hadiah' => 'https://drive.google.com/file/d/1cQpW0XcT4sHcC0JWwZqXGkTq2JkzYqYn/view?usp=sharing'
        ]);
    }
}
