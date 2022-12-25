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
        Schema::create('bidans', function (Blueprint $table) {
            $table->id("id_bidan");
            $table->String('nama');
            $table->String('nip');
            $table->foreignId('id_posyandu')->references('id_posyandu')->on('posyandus');
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
        Schema::dropIfExists('bidans');
    }
};
