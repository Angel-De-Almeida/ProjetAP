<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateScanTable extends Migration
{
    public function up()
    {
        Schema::create('scan', function (Blueprint $table) {
            $table->increments('id_scan');
            $table->string('titre');
            $table->text('description')->nullable();
            $table->date('date_ajout');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('scan');
    }
}
