<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tb_pemenang', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('id_peserta'); // Contoh kolom lain
            $table->string('kode_hadiah_undian'); // Pastikan ini hanya ada satu kali
            $table->timestamps();


            $table->foreign('id_peserta')->references('id')->on('tb_peserta')->onDelete('cascade');
        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pemenang');
    }
};
