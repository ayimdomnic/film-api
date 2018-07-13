<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmGenres extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_genres', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('genre_id');
            $table->unsignedInteger('film_id');
            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('film_id')->references('id')->on('films');
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
        Schema::dropIfExists('film_genres');
    }
}
