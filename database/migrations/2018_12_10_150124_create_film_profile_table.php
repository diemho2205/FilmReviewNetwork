<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_profile', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->string('favouriteFilm');
            $table->string('favouriteCharacter');
            $table->string('feeling');
            $table->string('favouriteDirector');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film_profile');
    }
}
