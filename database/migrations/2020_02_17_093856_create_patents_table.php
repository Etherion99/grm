<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatentsTable extends Migration
{
    public function up()
    {
        Schema::create('patents', function (Blueprint $table) {
             $table->smallIncrements('id');
            $table->string('name', 50);
            $table->string('description', 500);
            $table->date('reg_date');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patents');
    }
}
