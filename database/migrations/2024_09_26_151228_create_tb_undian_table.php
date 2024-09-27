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
            $table->id();  
            $table->string('nama_undian');  
            $table->date('tmt_undian')->nullable();  
            $table->date('tst_undian')->nullable();  
            $table->timestamps();  
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
