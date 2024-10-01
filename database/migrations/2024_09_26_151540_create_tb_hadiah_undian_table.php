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
            $table->unsignedBigInteger('undian_id');
            $table->unsignedBigInteger('hadiah_id');
            $table->unsignedBigInteger('peringkat_id')->nullable();
            $table->string('kd_hadiah');
            $table->timestamps();

            $table->foreign('undian_id')->references('id')->on('tb_undian')->onDelete('cascade');
            $table->foreign('hadiah_id')->references('id')->on('tb_hadiah')->onDelete('cascade');
            $table->foreign('peringkat_id')->references('id')->on('tb_peringkat')->onDelete('cascade');
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
