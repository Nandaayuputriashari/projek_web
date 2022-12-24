<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penimbangans', function (Blueprint $table) {
            $table->id('id_penimbangan');
            $table->string('bayi_id');
            $table->foreign('bayi_id')->references("id_bayi")->on("bayis");
            $table->foreignId('posyandu_id')->references("id_posyandu")->on("posyandus");
            $table->double('tinggi_badan');
            $table->double('berat_badan');
            $table->string('posisi');
            $table->string('umur');
            $table->date('tanggal_pemeriksaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penimbangans');
    }
};
