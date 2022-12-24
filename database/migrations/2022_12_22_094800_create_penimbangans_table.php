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
            $table->id('id_penimbangan')->primary();
            $table->double('tinggi_badan');
            $table->double('berat_badan');
            $table->string('posisi');
            $table->string('umur');
            $table->date('tanggal_pemeriksaan');
            $table->foreignId('id_by')->references('id_bayi')->on('bayis');
            $table->foreignId('id_pos')->references('id_posyandu')->on('posyandus');
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
