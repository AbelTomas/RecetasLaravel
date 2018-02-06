<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recetas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('numcomensales');
            $table->string('ingrediente1');
            $table->integer('cantidad1');
            $table->string('ingrediente2');
            $table->integer('cantidad2');
            $table->string('ingrediente3');
            $table->integer('cantidad3');
            $table->string('categoria');
            $table->integer('valoracion');
            $table->rememberToken();
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
        Schema::dropIfExists('receta');
    }
}
