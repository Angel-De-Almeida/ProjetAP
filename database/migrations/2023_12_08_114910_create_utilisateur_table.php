<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurTable extends Migration
{
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->increments('id_utilisateur');
            $table->string('nom_utilisateur');
            $table->string('Email');
            $table->string('motdepasse');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('utilisateur');
    }
}
