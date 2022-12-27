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
        Schema::create('bayis', function (Blueprint $table) {
            // $table->string('id_bayi')->primary()->max(18);
            $table->id();
            $table->foreignId('id_posyandu')->references('id')->on('posyandus');
            $table->string('name_bayi');
            $table->string('nik_ibu')->max(18);
            $table->string('name_ibu');
            $table->string('tgl_lahir');
            $table->string('jenis_kel');
            $table->string('rt');
            $table->string('rw');
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
        Schema::dropIfExists('bayis');
    }
};
