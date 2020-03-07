<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSoftwareMembersTable extends Migration
{
    public function up()
    {
        Schema::create('software_members', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('member');
            $table->unsignedSmallInteger('software');
            $table->timestamps();

            $table->foreign('member')->references('id')->on('members');
            $table->foreign('software')->references('id')->on('software');
        });
    }

    public function down()
    {
        Schema::dropIfExists('software_members');
    }
}
