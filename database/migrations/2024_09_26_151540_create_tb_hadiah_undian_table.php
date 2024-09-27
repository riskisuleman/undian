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
        Schema::create('tb_hadiah_undian', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_undian');
            $table->unsignedBigInteger('id_hadiah');
            $table->unsignedBigInteger('id_peringkat');
            $table->string('kode_hadiah_undian');
            $table->timestamps();

            $table->foreign('id_undian')->references('id')->on('tb_undian')->onDelete('cascade');
            $table->foreign('id_hadiah')->references('id')->on('tb_hadiah')->onDelete('cascade');
            $table->foreign('id_peringkat')->references('id')->on('tb_peringkat')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_hadiah_undian');
    }
};
