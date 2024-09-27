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
            'id_undian' => 1,
            'id_hadiah' => 1,
            'id_peringkat' => 1,
            'kode_hadiah_undian' => 'SK03',
        ]);
    }
}
