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
            'undian_id' => 1,
            'hadiah_id' => 1,
            'peringkat_id' => 1,
            'kd_hadiah' => 'SK03',
        ]);
    }
}
