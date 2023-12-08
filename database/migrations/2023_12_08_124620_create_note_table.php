<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoteTable extends Migration
{
    public function up()
    {
        Schema::create('note', function (Blueprint $table) {
            $table->increments('id_note');
            $table->integer('nb_etoiles');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('note');
    }
}
