<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobMembersTable extends Migration
{
    public function up()
    {
        Schema::create('job_members', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('member');
            $table->unsignedSmallInteger('job');
            $table->string('objective', 500);
            $table->string('link', 150);
            $table->timestamps();

            $table->foreign('member')->references('id')->on('members');
            $table->foreign('job')->references('id')->on('jobs');
        });
    }

    public function down()
    {
        Schema::dropIfExists('job_members');
    }
}
