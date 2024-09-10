<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama_lengkap' => 'Riski Suleman',
            'username' => 'admin',
            // 'level' => 'admin',
            'alamat' => 'Paguyaman',
            'no_hp' => '08123456789',
            'no_registrasi' => '123456789',
            'password' => Hash::make('riski123'),
        ]);
    }
}
