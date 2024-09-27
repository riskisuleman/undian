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
        Schema::create('tb_peserta_undian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_undian');
            $table->unsignedBigInteger('id_peserta');
            $table->string('kode_peserta_undian');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('id_undian')->references('id')->on('tb_undian')->onDelete('cascade');
            $table->foreign('id_peserta')->references('id')->on('tb_peserta')->onDelete('cascade');
        });




    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_peserta_undian');
    }
};
