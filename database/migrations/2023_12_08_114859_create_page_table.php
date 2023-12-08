<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageTable extends Migration
{
    public function up()
    {
        Schema::create('page', function (Blueprint $table) {
            $table->increments('id_page');
            $table->integer('numero_page');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('page');
    }
}
