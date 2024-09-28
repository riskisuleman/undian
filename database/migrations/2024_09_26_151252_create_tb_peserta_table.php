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
        Schema::create('tb_peserta', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('undian_id');
            $table->string('kd_peserta');
            $table->string('no_undian');
            $table->date('tanggal');
            $table->timestamps();

            $table->foreign('undian_id')->references('id')->on('tb_undian')->onDelete('cascade');

        });



    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_peserta');
    }
};
