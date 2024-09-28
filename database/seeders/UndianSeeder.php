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
            'user_id' => 1,
            'tmt_undian' => '2024-05-05',
            'tst_undian' => '2024-05-05',
        ]);
    }
}
