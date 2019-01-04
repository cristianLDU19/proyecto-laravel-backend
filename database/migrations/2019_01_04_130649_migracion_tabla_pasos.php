<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MigracionTablaPasos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pasos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_receta');
            $table->string('instruccion');
            $table->integer('orden');
            $table->integer('duracion');
            $table->string('video');
            $table->string('slug_receta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pasos');
    }
}
