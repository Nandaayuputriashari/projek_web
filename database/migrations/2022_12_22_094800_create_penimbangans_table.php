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
            $table->string('id_penimbangan')->primary();
            $table->foreignId('bayi_id')->constrained();
            $table->foreignId('posyandu_id')->constrained();
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
