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
            $table->id(); 
            $table->unsignedBigInteger('id_peserta'); 
            $table->unsignedBigInteger('id_hadiah_undian'); 
            $table->timestamps();


            $table->foreign('id_peserta')->references('id')->on('tb_peserta')->onDelete('cascade');
            $table->foreign('id_hadiah_undian')->references('id')->on('tb_hadiah_undian')->onDelete('cascade');
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
