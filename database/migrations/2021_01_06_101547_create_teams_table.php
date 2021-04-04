<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('job_title');
            $table->text('Image');
            $table->text('Instagram_link')->nullable();
            $table->text('facebook_link')->nullable();
            $table->text('linkedin_link')->nullable();
            $table->text('youtube_link')->nullable();
            $table->text('behance_link')->nullable();
            $table->text('github_link')->nullable();
            $table->text('dribble_link')->nullable();
            $table->text('twitter_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teams');
    }
}
