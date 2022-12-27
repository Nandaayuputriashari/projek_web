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
            $table->id();
            $table->double('tinggi_badan');
            $table->double('berat_badan');
            $table->string('posisi');
            $table->string('umur');
            $table->date('tanggal_pemeriksaan');
            $table->foreignId('id_by')->references('id')->on('bayis');
            $table->foreignId('id_posyandu')->references('id')->on('posyandus');
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
