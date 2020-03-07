<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicAchievementsTable extends Migration
{
    public function up()
    {
        Schema::create('topic_achievements', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedTinyInteger('topic');
            $table->string('text', 350);
            $table->timestamps();

            $table->foreign('topic')->references('id')->on('topics');
        });
    }

    public function down()
    {
        Schema::dropIfExists('topic_achievements');
    }
}
