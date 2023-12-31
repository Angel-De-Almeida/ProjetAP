<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChapitreTable extends Migration
{
    public function up()
    {
        Schema::create('chapitre', function (Blueprint $table) {
            $table->increments('id_chap');
            $table->integer('numero_chap');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chapitre');
    }
}
