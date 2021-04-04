<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortfolioServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio_service', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('portfolio_id')->unsigned()->nullable();
            $table->foreign('portfolio_id')->references('id')
                ->on('portfolios')->onDelete('cascade');

            $table->bigInteger('service_id')->unsigned()->nullable();
            $table->foreign('service_id')->references('id')
                ->on('services')->onDelete('cascade');
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
        Schema::dropIfExists('portfolio_service');
    }
}
