<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatentMembersTable extends Migration
{
    public function up()
    {
        Schema::create('patent_members', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('member');
            $table->unsignedSmallInteger('patent');
            $table->timestamps();

            $table->foreign('member')->references('id')->on('members');
            $table->foreign('patent')->references('id')->on('patents');
        });
    }

    public function down()
    {
        Schema::dropIfExists('patent_members');
    }
}
