<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('slogan')->nullable();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->text('Background_image')->nullable();
            $table->text('full_image')->nullable();
            $table->string('video_link')->nullable();
            $table->string('color_gradiant_1')->nullable();
            $table->string('color_gradiant_2')->nullable();
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
        Schema::dropIfExists('services');
    }
}
