<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car_photos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('car_id')->unsigned()->index()->nullable();
            $table->string('path');
            $table->softDeletes();
            $table->timestamps();
            $table->foreign('car_id')->references('id')->on('cars');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_photos');
    }
}
