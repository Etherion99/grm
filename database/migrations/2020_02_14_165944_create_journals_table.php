<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalsTable extends Migration
{
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->tinyIncrements('id');
            $table->string('name', 100);
            $table->string('link', 150);
            $table->string('photo_extension', 3);
            $table->string('issn', 10);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('journals');
    }
}
