<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuteurTable extends Migration
{
    public function up()
    {
        Schema::create('auteur', function (Blueprint $table) {
            $table->increments('id_auteur');
            $table->string('nom');
            $table->string('prenom');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('auteur');
    }
}
