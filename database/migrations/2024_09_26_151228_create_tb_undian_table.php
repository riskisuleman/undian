<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Menjalankan migrasi.
     */
    public function up(): void
    {
        Schema::create('tb_undian', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('nama_undian');  // Gunakan snake_case
            $table->date('tmt_undian')->nullable();  // Izinkan nilai null jika diperlukan
            $table->date('tst_undian')->nullable();  // Izinkan nilai null jika diperlukan
            $table->timestamps();  // Timestamps untuk created_at dan updated_at
        });
    }

    /**
     * Membalikkan migrasi.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_undian');
    }
};
