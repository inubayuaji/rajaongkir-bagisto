<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CretaeKabkotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rajaongkir_kabkot', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('provinsi_id');
            $table->string('nama');
            $table->integer('kode_pos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rajaongkir_kabkot');

    }
}
