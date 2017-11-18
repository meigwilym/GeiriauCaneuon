<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('lyric_id');
            $table->unsignedInteger('artist_image_id');
            $table->string('tweet');
            $table->timestamps();
            
            $table->foreign('lyric_id')->references('id')->on('lyrics');
            $table->foreign('artist_image_id')->references('id')->on('artist_images');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logs');
    }
}
