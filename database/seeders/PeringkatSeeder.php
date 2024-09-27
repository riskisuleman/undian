<?php

namespace Database\Seeders;

use App\Models\Peringkat;

use Illuminate\Database\Seeder;

class PeringkatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peringkat::create([
            'peringkat' => '1',
        ]);

        Peringkat::create([
            'peringkat' => '2',
        ]);

        Peringkat::create([
            'peringkat' => '3',
        ]);
    }
}
