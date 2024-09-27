<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\HadiahUndian;


class HadiahUndianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        HadiahUndian::create([
            'kode_hadiah_undian' => 'k001',
        ]);
    }
}
