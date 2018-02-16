<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMultiLangTextsTable extends Migration
{


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("text", function (Blueprint $table) {
            $table->char('key');
            $table->char('lang', 2);
            $table->longText('value');
            $table->enum('scope', ['admin', 'site', 'global'])->default('global');
            $table->timestamps();
            $table->primary(['key', 'lang', 'scope']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop("text");
    }

}
